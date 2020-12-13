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
        $incredients = Incredient::latest()->get();

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
            'incredient_de' => ['required', 'min:2'],
            'food_group_id' => ['required', 'exists:food_groups,id'],
            'grocery_division_id' => ['nullable', 'exists:grocery_divisions,id'],
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
        // return "hello " . $id;
        $incredient = Incredient::find($id);

        return view('incredients.show', compact('incredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $incredient = Incredient::find($id);

        $food_groups = Food_group::all('id', 'food_group_de');
        $grocery_divisions = Grocery_division::all('id', 'division_de');

        return view('incredients.edit', compact('incredient', 'food_groups', 'grocery_divisions'));
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
        request()->validate([
            'incredient_de' => ['required', 'min:2'],
            'food_group_id' => ['required', 'exists:food_groups,id'],
            'grocery_division_id' => ['nullable', 'exists:grocery_divisions,id'],
        ]);

        $incredient = Incredient::find($id);

        $incredient->incredient_de = request('incredient_de');
        $incredient->food_group_id = request('food_group_id');
        $incredient->grocery_division_id = request('grocery_division_id');

        $incredient->save();

        return redirect('incredients/' . $incredient->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $incredient = Incredient::find($id);
        $incredient->delete();

        return redirect('/incredients');
    }
}
