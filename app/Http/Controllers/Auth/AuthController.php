<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function AdminLogin(AdminRequest $request)
    {
        $attributes = $request->validated();

        if (auth('admin')->attempt($attributes))
        {
            return redirect('/dashboard');
        }

        throw ValidationException::withMessages(['password' => 'invalid password']);
    }

}
