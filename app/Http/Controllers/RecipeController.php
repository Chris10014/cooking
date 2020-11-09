<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Course;
use App\Models\Dish_type;
use App\Models\Cookbook;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


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

        return view("recipes.index", compact('recipes'));
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

        return view('recipes.create', compact('courses', 'dish_types', 'cookbooks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedAttributes =  $this->validateRecipe(); // validates the attributes without the recipe_image

        // if the request contains an image...
        if ($request->hasFile('recipe_image')) {
            $path = $this->uploadImage();
            Recipe::create($validatedAttributes + ['recipe_image' => $path]); //adds the path of the recipe image to the request
        } else {
            Recipe::create($validatedAttributes);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validateRecipe()
    {
        return request()->validate([
            'name' => ['required', 'min:5'],
            'preparation_time' => ['nullable', 'numeric'],
            'dish_type_id' => ['required', 'integer'],
            'course_id' => ['required', 'integer'],
            'cookbook_id' => ['required_with:page'],
            'page' => ['required_with:cookbook_id']
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
}
