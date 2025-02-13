<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class Product extends Model
{


    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'update_at',
        'category',
        'id'        
    ];
    //



   
}
