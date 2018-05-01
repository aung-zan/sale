<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id', 'main_categories', 'sub_categories', 'product_name', 'brand', 'description', 'photo', 'price', 'condition', 'sale'
    ];
}
