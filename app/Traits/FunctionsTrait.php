<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

Trait FunctionsTrait{

    function SaveImage($image,$path){

       $image_name = time(). $image->getClientOriginalName() ;

        Storage::disk('mawdoo3')->put($path.'/'.$image_name,$image->get());

        return $image_name;
    }

    function RemoveImage($image,$path){
        $image_name = $image ;
        Storage::disk('mawdoo3')->delete($path.'/'.$image_name);

        return true;
    }
}
