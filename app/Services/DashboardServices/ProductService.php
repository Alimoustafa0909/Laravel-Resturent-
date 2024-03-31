<?php

namespace App\Services\DashboardServices;

use App\Helpers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductService
{
    /*Showing Product Page at Dashboard*/
    public function index()
    {
        $products = Product::paginate(6);
        return view('dashboard.products.index', compact('products'));
    }

    /*Adding Product*/
    public function store(ProductRequest $request)
    {
        $attributes = $request->validated();
        $attributes['image'] = (new Helpers)->uploadImage($request->file('image'), 'products');
        Product::create($attributes);
        return redirect()->route('dashboard.products.index')->with('success_message', 'The product has been Added successfully');
    }

    /*//    Create View*/
    public function create()
    {
        return view('dashboard.products.create');
    }

    /*Edit Product*/
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', compact('product'));
    }

    /*Update Product*/
    public function update(ProductRequest $request, Product $product)
    {
        $attributes = $request->validated();
        if (request()->file('image'))
            $attributes['image'] = (new Helpers)->uploadImage($request->file('image'), 'products');
        $product->update($attributes);
        return redirect()->route('dashboard.products.index')->with('success_message', 'The product has been Updated successfully');
    }

    /*Showing Product*/
    public function show(Product $product)
    {
        return view('dashboard.products.show', compact('product'));
    }

    /*Delete Product*/
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('dashboard.products.index')->with('success_message', 'The Product has been Deleted successfully');
    }
}
