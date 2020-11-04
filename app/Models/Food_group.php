<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_group extends Model
{
    use HasFactory;

    /**
     * Get the incredients for the food_group.
     */
    public function incredients()
    {
        return $this->hasMany('App\Models\Incredient');
    }


}
