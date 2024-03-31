<?php

namespace App\Services\WebServices;

use App\Models\Product;
use App\Models\Reviwes;
use App\Models\Slider;
use App\Models\Chef;
use App\Models\About;
class HomeService
{
    public function getIndexData()
    {
        $breakfast_pro = Product::where('category_name', 'breakfast')->first();
        $lunch_pro = Product::where('category_name', 'lunch')->first();
        $dinner_pro = Product::where('category_name', 'dinner')->first();
        $drinks_pro = Product::where('category_name', 'drinks')->first();
        $desserts_pro = Product::where('category_name', 'desserts')->first();
        $wine_pro = Product::where('category_name', 'wine')->first();
        $chefs = Chef::all();
        $about = About::latest()->first();
        $products = Product::paginate(4);
        $HeaderSliders = Slider::where('type', 'header')->get();
        $BodySliders = Slider::where('type', 'body')->get();
        $reviews = Reviwes::all();

        return compact(
            'products',
            'HeaderSliders',
            'BodySliders',
            'about',
            'breakfast_pro',
            'lunch_pro',
            'dinner_pro',
            'drinks_pro',
            'desserts_pro',
            'wine_pro',
            'chefs',
            'reviews'
        );
    }
}
