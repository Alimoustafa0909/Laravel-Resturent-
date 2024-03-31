<?php

namespace App;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Helpers
{
    function uploadImage($image, $modelName): string
    {
        $path = "images/$modelName";
        $imageName = env('APP_NAME') . '_' . time() . '_' . $image->getClientOriginalName();
        $image->storeAs($path, $imageName, 'public');
        return $imageName;
    }

}
