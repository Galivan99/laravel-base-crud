<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'fumettis';
    protected $fillable = ['title', 'description', 'image', 'price', 'series', 'sale_date', 'type'];
}
