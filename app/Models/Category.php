<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   
    const status = [
        0 => 'Inactive',
        1 => 'active',
    ];
    protected $fillable = ['name', 'slug', 'description', 'status'];

}
