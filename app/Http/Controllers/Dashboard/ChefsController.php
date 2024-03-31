<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChefRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Chef;
use App\Models\Product;
use Illuminate\Http\Request;

class ChefsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chefs = Chef::paginate(5);
        return view('dashboard.chefs.index', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.chefs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChefRequest $request)
    {
        $attributes = $request->validated();
        $attributes['image'] = (new Helpers)->uploadImage($request->file('image'), 'chefs');
        Chef::create($attributes);
        return redirect()->route('dashboard.chefs.index')->with('success_message', 'The Chef has been Added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Chef $chef)
    {
        return view('dashboard.chefs.show', compact('chef'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chef $chef)
    {
        return view('dashboard.chefs.edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChefRequest $request, Chef $chef)
    {
        $attributes = $request->validated();
        if (request()->file('image'))
            $attributes['image'] = (new Helpers)->uploadImage($request->file('image'), 'chefs');
        $chef->update($attributes);
        return redirect()->route('dashboard.chefs.index')->with('success_message', 'The Chef has been Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chef $chef)
    {
        $chef->delete();
        return redirect()->route('dashboard.chefs.index')->with('success_message', 'The Chef has been Deleted successfully');

    }
}
