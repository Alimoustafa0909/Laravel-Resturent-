<?php

namespace App\Services\WebServices;

use App\Models\Product;
use App\Models\Slider;

class MenuService
{
    public function index()
    {
        $breakfast_pro = Product::where('category_name', 'breakfast')->get();
        $lunch_pro = Product::where('category_name', 'lunch')->get();
        $dinner_pro = Product::where('category_name', 'dinner')->get();
        $drinks_pro = Product::where('category_name', 'drinks')->get();
        $desserts_pro = Product::where('category_name', 'desserts')->get();
        $wine_pro = Product::where('category_name', 'wine')->get();
        $MenuSliders = Slider::latest()->where('type', 'menu')->first();
        return compact(
            'MenuSliders',
            'breakfast_pro',
            'lunch_pro',
            'dinner_pro',
            'drinks_pro',
            'desserts_pro',
            'wine_pro');
    }
}
