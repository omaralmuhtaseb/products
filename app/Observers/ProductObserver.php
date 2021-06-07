<?php

namespace App\Observers;

use App\Product;
use App\Traits\FunctionsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductObserver
{    use FunctionsTrait;


    protected $request;


    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function creating(Product $product){
        if ($this->request->has('image') )
        $product->image = $this->SaveImage($this->request->image,'products-images');



    }


    /**
     * Handle the product "created" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        if ($this->request->has('category') )
            $product->Category()->sync($this->request['category']);
    }


    public function updating(Product $product){
        if ($this->request->has('image') ){

            $this->RemoveImage($product->image ,'products-images');

            $product->image = $this->SaveImage($this->request->image,'products-images');
        }

    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        if ($this->request->has('category') )
            $product->Category->sync($this->request['category']);
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }
}
