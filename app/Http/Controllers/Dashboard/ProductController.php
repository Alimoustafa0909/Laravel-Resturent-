<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\DashboardServices\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return $this->productService->index();
    }

    public function store(ProductRequest $request)
    {
        return $this->productService->store($request);
    }

    public function create()
    {
        return $this->productService->create();
    }

    public function edit(Product $product)
    {
        return $this->productService->edit($product);
    }

    public function update(ProductRequest $request, Product $product)
    {
        return $this->productService->update($request, $product);
    }

    public function show(Product $product)
    {
        return $this->productService->show($product);
    }

    public function destroy(Product $product)
    {
        return $this->productService->destroy($product);
    }
}
