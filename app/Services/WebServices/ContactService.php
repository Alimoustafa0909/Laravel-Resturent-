<?php

namespace App\Services\WebServices;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Slider;
use Illuminate\Support\Facades\Auth;

class ContactService
{
    public function index()
    {
        return Slider::latest()->where('type', 'contact')->first();
    }

    public function store(ContactRequest $request)
    {
        $request->validated();
        $message = new Contact();
        $message->user_id = Auth::id();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();
        return 'Your message has been sent successfully!';
    }
}
