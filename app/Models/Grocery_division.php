<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grocery_division extends Model
{
    use HasFactory;

    /**
     * Get the incredients for the grocery_division.
     */
    public function incredients()
    {
        return $this->hasMany('App\Models\Incredient');
    }
}
