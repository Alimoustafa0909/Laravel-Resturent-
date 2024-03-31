<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewRequest;
use App\Models\Contact;
use App\Models\Reviwes;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    public function index(){
        $slider= Slider::latest()->where('type','review')->first();
        return view('web.review',compact('slider'));
    }
    public function store(ReviewRequest $request){
        $request->validated();
        $message = new Reviwes();
        $message->user_id = Auth::id();
        $message->name = $request->input('name');
        $message->content = $request->input('content');
        $message->save();
        return redirect(route('reviews.index'))->with('success', 'Your Review has been sent successfully' );
    }
}
