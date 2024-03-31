<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Services\WebServices\ContactService;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $slider = $this->contactService->index();
        return view('web.contact', compact('slider'));
    }

    public function store(ContactRequest $request)
    {
        $response = $this->contactService->store($request);
    }
}
