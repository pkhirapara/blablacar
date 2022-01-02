<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


/**
 * @mixin \Eloquent
 * @mixin Builder
 */
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('pages.users.index', compact('users'));
    }

    public function create()
    {

        return view('pages.users.create');
    }

    public function store(StoreUserRequest $request)
    {

        $data = $request->validated();

        User::create($data);

        //return redirect('/users');

    }

    public function show(User $user){

        //$user = User::findOrFail($userId);

        return view('pages.users.show', compact('user'));
    }

    public function edit(User $user){

        return view('pages.users.edit', compact('user'));
    }

    public function update(User $user, UpdateUserRequest $request)
    {
        $data = $request->validated();

        User::where('id', $user->id)->update($data);

        //return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users');
    }
}
