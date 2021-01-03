<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Course;
use App\Models\Dish_type;
use App\Models\Cookbook;
use App\Models\Food_group;
use App\Models\Grocery_division;
use App\Models\Incredient;
use App\Models\Unit;
use DOMDocument;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\CommonMark\Inline\Element\Code;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        $units = Unit::all('id', 'abbreviation');

        return view("recipes.index", compact('recipes', 'units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all('id', 'de');
        $dish_types = Dish_type::all('id', 'de');
        $cookbooks = Cookbook::all('id', 'title');
        $incredients = Incredient::all('id', 'incredient_de');
        $food_groups = Food_group::all('id', 'food_group_de');
        $units = Unit::all('id', 'abbreviation');

        return view('recipes.create', compact('courses', 'dish_types', 'cookbooks', 'incredients', 'food_groups', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validateRecipe(); // validates the attributes without the recipe_image

        // if the request contains an image
        if ($request->hasFile('recipe_image')) {
            $path = $this->uploadImage();
            $recipe = new Recipe(request(['name', 'preparation_time', 'dish_type_id', 'course_id', 'cookbook_id', 'page']) + ['recipe_image' => $path]); //adds the path of the recipe image to the request
        } else {
            $recipe = new Recipe(request(['name', 'preparation_time', 'dish_type_id', 'course_id', 'cookbook_id', 'page']));
        }

        //Store to database
        $recipe->save();

        if ((request('incredient_ids')) != NULL) {

            //attach releationship to link table including additional fields
            for ($i = 0; $i < count(request('incredient_ids')); $i++) {
                $recipe->incredients()->attach(request('incredient_ids')[$i], ['quantity' => request('quantities')[$i], 'unit_id' => request('unit_ids')[$i]]);
            }
        }

        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('recipe show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('recipe edit: ' . $id);
        $recipe = Recipe::find($id);

        $dish_types = Dish_type::all('id', 'de');
        $courses = Course::all('id', 'de');
        $incredients = Incredient::all('id', 'incredient_de');
        $cookbooks = Cookbook::all('id', 'title');

        return view('recipes.edit', compact('recipe', 'dish_types', 'courses', 'cookbooks', 'incredients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('recipe update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();

        return redirect('/recipes');
    }

    public function validateRecipe()
    {
        return request()->validate([
            'name' => ['required', 'min:5', 'unique:recipes,name'],
            'preparation_time' => ['nullable', 'numeric'],
            'dish_type_id' => ['required', 'exists:dish_types,id'],
            'course_id' => ['required', 'exists:courses,id'],
            'cookbook_id' => ['nullable','required_with:page', 'exists:cookbooks,id'],
            'page' => ['nullable', 'required_with:cookbook_id'],
            'incredient_ids' => ['nullable', 'required_with:quantities', 'exists:incredients,id'],
            'quantities' => ['required_with:unit_ids'],
            'unit_ids' =>['required_with:quantities']
        ]);
    }

    /**
     * validates the image
     * name the image with a 4 digits random number plus recipe name with replaced special characters
     * returns the path of the uploaded image
     *
     * @param \Illuminate\Http\Request  $request
     * @return string path
     */

    public function uploadImage()
    {
        $validatedImage = request()->validate([
            'recipe_image' => ['nullable', 'image', 'max:500']
        ]);

        return request()->file('recipe_image')->storeAs('recipe_images', mt_rand(1000, 9999) . "_" . $this->str_replace_umlaute(request('name')));
    }

    /**
     * replaces special characters white space and slash within a string in to underline
     * replaces german "Umlaute"
     * @param string $string
     * @return string $replaced
     */
    public function str_replace_umlaute($string)
    {
        $source_characters  = array(' ', '/', 'ä', 'ö', 'ü', 'ß');
        $target_characters = array('_', '_', 'ae', 'oe', 'ue', 'ss');
        $replaced  = str_replace($source_characters, $target_characters, $string);

        return $replaced;
    }

    public function search($str)
    {
        $incredients = Incredient::select("id", "incredient_de")
            ->where('incredient_de', 'LIKE', "%" . $str . "%")
            ->get();

        $units = Unit::all('id', 'abbreviation');

        foreach($incredients AS $incredient) {

            if(isset($recipe) && $recipe->isPartOfThe($incredient)) {
                // add the deleteIncredient() function
            } else {
                // add the addIncredient() function
                $fct = "<span onclick='addIncredientToRecipe(" . $incredient->id . ")'><i class='fas fa-plus-square'></i></span>";
            }

            // Everything after echo will be send to the <div id='result'></div> of recipe.create via ajax
            echo
            "<div id='foundIncredients" . $incredient->id . "'>
                <div class='inline-block col-md-3' id='incredientName" . $incredient->id . "'>" .
                    $incredient->incredient_de . "
                </div>

                <div class='inline-block col-md-4'>
                    <label for='quantity" . $incredient->id . "'>Menge: </label>
                    <input type='number' step='0.1' lang='de' name='quantity' id='quantity" . $incredient->id . "' placeholder='Menge'>
                </div>
                <div class='inline-block col-md-2'>
                    <label for='units" . $incredient->id . "'>Einheit: </label>
                    <select name='units' id='units" . $incredient->id . "'>";
                echo "<option value='0'></option>";
               foreach ($units as $unit) {
                    echo "<option value='" . $unit->id . "'>" . $unit->abbreviation . "</option>";
                }
                echo "</select>
                </div>
                <div class='inline-block col-md-2'>
                    $fct
                </div>
            </div>
            <br>";

        }

    }
}
