<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable =
        ['name','description','quantity','price','image','creator_id'];



    public function Category(){
        return $this->belongsToMany(Category::class,
            'products_categories', 'product_id',
            'category_id');

    }


    public function getProductImageAttribute(){

        return asset('mawdoo3/products-images').'/'. $this->image ;
    }

    public function scopeFirstDayCount($query){
        return $query->whereDate('created_at',now()->firstOfMonth())->count();
    }

    public function scopeSecondDayCount($query){
        return $query->whereDate('created_at',now()->firstOfMonth()->addDay(2))->count();
    }

    public function scopeThirdDayCount($query){
        return $query->whereDate('created_at',now()->firstOfMonth()->addDay(3))->count();
    }

    public function scopeFourthDayCount($query){
        return $query->whereDate('created_at',now()->firstOfMonth()->addDay(4))->count();
    }

    public function scopeFifthDayCount($query){
        return $query->whereDate('created_at',now()->firstOfMonth()->addDay(5))->count();
    }

    public function scopeSixthDayCount($query){
        return $query->whereDate('created_at',now()->firstOfMonth()->addDay(6))->count();
    }

    public function scopeSeventhDayCount($query){
        return $query->whereDate('created_at',now()->firstOfMonth()->addDay(7))->count();
    }
}
