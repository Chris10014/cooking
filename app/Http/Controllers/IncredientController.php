<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incredient;
use App\Models\Food_group;
use App\Models\Grocery_division;
use App\Models\Unit;
use Illuminate\Validation\Rule;

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
        // todo: write updated when changed
        // $updated = "updated";

        return view('incredients.show', compact('incredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Incredient $incredient)
    {

        // $incredient = Incredient::find($id);

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
    public function update(Incredient $incredient)
    {
        request()->validate([
            'incredient_de' => ['required', 'min:2', Rule::unique('incredients')->ignore($incredient->id)],
            'food_group_id' => ['required', 'exists:food_groups,id'],
            'grocery_division_id' => ['nullable', 'exists:grocery_divisions,id'],
        ]);

        // $incredient = Incredient::find($id);

        $incredient->incredient_de = request('incredient_de');
        $incredient->food_group_id = request('food_group_id');
        $incredient->grocery_division_id = request('grocery_division_id');

        $incredient->save();

        return redirect('incredients');

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

    /**
     * @param {str} $string string which has to be part of the incredient name
     * @return {html} returns html code to display the result with input tags
     */

    public function search($string)
    {
        $incredients = Incredient::select("id", "incredient_de")
        ->where('incredient_de', 'LIKE', "%" . $string . "%")
            ->get();

        $units = Unit::all('id', 'abbreviation');


        foreach ($incredients as $incredient) {

            if (isset($recipe) && $recipe->isPartOfThe($incredient)) {
                // add the deleteIncredient() function
                // Not needed, delete function is added in the view
            } else {
                // add the addIncredient() function
                $fct = "<span onclick='addIncredientToRecipe(" . $incredient->id . ")'><i class='fas fa-plus-square'></i></span>";
            }


            // Everything after echo will be send to the <div id='result'></div> of recipe.create via ajax
            echo
            "<div class='row' id='foundIncredients" . $incredient->id . "'>
                <div class='col-md-3' id='incredientName" . $incredient->id . "'>" .
            $incredient->incredient_de . "
                </div>

                <div class='col-auto'>
                    <label for='quantity" . $incredient->id . "'>Menge: </label>
                    <input type='number' step='0.1' lang='de' name='quantities[]' id='quantity" . $incredient->id . "' placeholder='Menge'>
                </div>
                <div class='col-auto'>
                    <label for='units" . $incredient->id . "'>Einheit: </label>
                    <select name='unit_ids[]' id='units" . $incredient->id . "'>";
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
