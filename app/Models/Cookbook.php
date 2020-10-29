<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cookbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'author_id', 'publisher_id'
    ];

    /**
     * Get the recipes of a cookbook.
     */
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe');
    }

    /**
     * Get the publisher that owns the cookbook.
     */
    public function publisher()
    {
        return $this->belongsTo('App\Models\Publisher');
    }

    /**
     * Get the author who owns the cookbook.
     */
    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }
}
