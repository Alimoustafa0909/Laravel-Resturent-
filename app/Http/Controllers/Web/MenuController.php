<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\WebServices\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index()
    {
        $indexData = $this->menuService->index();
        return view('web.menu',$indexData);
    }
}
