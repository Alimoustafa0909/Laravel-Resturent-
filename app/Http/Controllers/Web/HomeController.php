<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Chef;
use App\Models\Product;
use App\Models\Slider;
use App\Services\WebServices\HomeService;
use App\Services\WebServices\ReservationService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $indexData = $this->homeService->getIndexData();
        return view('web.home', $indexData);
    }


}
