<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incredient;
use App\Models\Food_group;
use App\Models\Grocery_division;

class IncredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incredients = Incredient::all();

        return view('incredients.index', compact('incredients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $food_groups = Food_group::all('id', 'food_group_de');
        $grocery_divisions = Grocery_division::all('id', 'division_de');

        return view('incredients.create', compact('food_groups', 'grocery_divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dump(request()->all());

        $validatedAttributes = request()->validate([
            'incredient_de' => ['required', 'alpha', 'min:2'],
            'food_group_id' => ['required', 'numeric'],
            'grocery_division_id' => ['nullable', 'numeric'],
        ]);

        Incredient::create($validatedAttributes);

        return redirect('/incredients');
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
        //git test ...
    }
}
