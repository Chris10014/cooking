<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Course;
use App\Models\Dish_type;
use App\Models\Cookbook;

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
        $validatedAttributes = request()->validate([
            'name' => ['required', 'min:5'],
            'preparation_time' => ['nullable', 'numeric'],
            'dish_type_id' => ['required', 'integer'],
            'course_id' => ['required', 'integer'],
            'cookbook_id' => ['required_with:page'],
            'page' => ['required_with:cookbook_id']
        ]);

        Recipe::create($validatedAttributes);
        // dump(request()->all());

        // $recipe = new Recipe();
        // $recipe->name = request('recipe_name');
        // $recipe->preparation_time = request('preparation_time');
        // $recipe->save();

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
}
