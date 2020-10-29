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
        return view("recipes.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all('id', 'course');
        $dish_types = Dish_type::all('id', 'type');
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
            'recipe_name' => ['required', 'min:5'],
            'preparation_time' => ['nullable', 'integer'],
            'dish_type_id' => ['required', 'integer'],
            'course_id' => ['required', 'integer'],
            'cookbook_id' => ['nullable', 'integer'],
            'page' => ['nullable', 'integer']
        ]);

        Recipe::create($validatedAttributes);

        // $recipe = new Recipe();
        // $recipe->name = request('recipe_name');
        // $recipe->preparation_time = request('preparation_time');
        // $recipe->save();

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
