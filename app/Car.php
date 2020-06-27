<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable =[
        'cat_id',
        'year',
        'model',
        'type',
        'color',
        'price',
        'mileage',
        'fuel',
        'seat',
        'image',
    ];
}
