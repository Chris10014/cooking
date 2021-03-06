<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'incredient_de', 'food_group_id', 'grocery_division_id'
    ];

    /**
     * Get the food_group that owns the incredient.
     */
    public function food_group()
    {
        return $this->belongsTo('App\Models\Food_group');
    }

    /**
     * Get the grocery_division that owns the incredient.
     */
    public function grocery_division()
    {
        return $this->belongsTo('App\Models\Grocery_division');
    }

    /**
     * Get the recipes that owns the incredient.
     */
    public function recipes()
    {
        return $this->belongsToMany('App\Models\Recipe')
            ->withPivot(['quantity', 'unit_id']);
    }

    public function isPartOfThe($recipe)
    {
        return $this->recipes()->where('recipe_id', $recipe->id)->exists();
    }

}
