<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish_type extends Model
{
    use HasFactory;

    /**
     * Get the recipes of a dish_type.
     */
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe');
    }
}
