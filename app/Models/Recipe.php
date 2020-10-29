<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'preparation_time', 'page', 'cookbook_id', 'dish_type_id', 'course_id'
    ];

    /**
     * Get the cookbook that owns the recipe.
     */
    public function cookbook()
    {
        return $this->belongsTo('App\Models\Cookbook');
    }

     /**
     * Get the dish_type that owns the recipe.
     */
    public function dish_type()
    {
        return $this->belongsTo('App\Models\Dish_type');
    }

    /**
     * Get the course that owns the recipe.
     */
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}
