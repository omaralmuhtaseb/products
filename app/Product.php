<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =
        ['name','description','quantity','price','image','creator_id'];



    public function Category(){
        return $this->belongsToMany(Category::class,
            'products_categories', 'product_id','category_id');

    }


}
