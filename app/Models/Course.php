<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Get the recipes of a course.
     */
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe');
    }
}
