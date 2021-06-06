<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function Product(){

        return $this->belongsToMany(Product::class,'products_categories');
    }

    public function getProductCountAttribute()
    {
        return $this->Product()->count() ;
    }

}
