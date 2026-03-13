<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    //
    protected $fillable = ['user_id', 'product_id', 'quantity', 'status'];

    /**
     * cart of every user
     * @return void
     */

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function product(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
