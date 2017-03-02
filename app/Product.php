<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function hasproducts()
    {

    return $this->hasMany('App\CategoryHasProduct', 'category_id');

    }
}
