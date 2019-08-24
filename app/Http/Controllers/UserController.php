<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        $customers = Customer::all();
        return view('users.add', ['customers' => $customers]);
    }

    public function store(Request $request)
    {
        $this->validate($request, User::$rules);
        $user = new User;
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form);
        $user->password = Hash::make($form['password']);
        $user->save();
        return redirect('/users');
    }

    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        $customers = Customer::all();
        $user = User::find($user->id);
        return view('users.edit', ['user' => $user, 'customers' => $customers]);
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, User::$rules);
        $user = User::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $user->fill($form);
        $user->password = Hash::make($form['password']);
        $user->save();
        return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }
}
