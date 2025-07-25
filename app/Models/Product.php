<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'img',
        'title',
        'characteristics',
        'subtitle',
        'details',
        'benefits',
        'cost',
        'count',
        'cartCount'
    ];
}
