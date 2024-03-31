<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Chef;
use App\Models\Slider;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $chefs=Chef::paginate(4);
        $abouts = About::latest()->first();
        $slider = Slider::where('type', 'about')->first();
        return view('web.about', compact('slider','abouts','chefs'));
    }
}
