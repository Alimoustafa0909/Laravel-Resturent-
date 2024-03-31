<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::paginate(3);
        return view('dashboard.sliders.index', compact('sliders'));
    }

    public function store(SliderRequest $request)
    {

        $attributes = $request->validated();

        $attributes['image'] =  (new Helpers)->uploadImage($request->file('image'), 'Sliders');

        Slider::create($attributes);

        return redirect()->route('dashboard.sliders.index')->with('success_message', 'The slider has been Added successfully');
    }

    public function create()
    {
        return view('dashboard.sliders.create');
    }

    public function edit(Slider $slider)
    {
        return view('dashboard.sliders.edit', compact('slider'));
    }

    public function update(SliderRequest $request, Slider $slider)
    {
        $attributes = $request->validated();


        if (request()->file('image'))
            $attributes['image'] =  (new Helpers)->uploadImage($request->file('image'), 'Sliders');

        $slider->update($attributes);

        return redirect()->route('dashboard.sliders.index')->with('success_message', 'The slider has been Updated successfully');
    }

    public function show(Slider $slider)
    {
        return view('dashboard.sliders.show', compact('slider'));
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('dashboard.sliders.index')->with('success_message', 'The Slider has been Deleted successfully');

    }
}
