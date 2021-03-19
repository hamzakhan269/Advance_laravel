<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function getNameAttribute($value)
    {
    	return ucfirst($value);
    }
}
