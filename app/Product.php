<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'title',
        'product_code',
        'description',
        'company',
        'type',
        'price',
       ];
}
