<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'first_name'
    ];

    /**
     * Get the cookbooks of the author.
     */
    public function cookbooks()
    {
        return $this->hasMany('App\Models\Cookbook');
    }
}
