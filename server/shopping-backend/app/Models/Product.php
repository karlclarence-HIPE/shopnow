<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name', 'ratings', 'stars', 'price', 'total_sold', 'status'];
}
