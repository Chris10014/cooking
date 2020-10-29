<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Get the cookbooks for the publisher.
     */
    public function cookbooks()
    {
        return $this->hasMany('App\Models\Cookbook');
    }
}
