<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(3);
        return view('dashboard.users.index', compact('users'));
    }

    public function store(UserRequest $request)
    {
        $attributes = $request->validated();

        Hash::make($attributes['password']);

        User::create($attributes);

        return redirect()->route('dashboard.users.index')->with('success_message', 'The user has been created successfully');
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $attributes = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id, 'max:255'],
        ]);


        $user->update($attributes);
        return redirect()->route('dashboard.users.index')->with('success_message', 'The user has been Updated successfully');
    }

    public function show(User $user)
    {
        return view('dashboard.users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.users.index')->with('success_message', 'The user has been Deleted successfully');

    }


}
