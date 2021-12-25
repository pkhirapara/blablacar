<?php

namespace App\Http\Controllers;

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
    public function index(Request $request)
    {
        //HTTP_UNPROCESSABLE_ENTITY = when validation not pass
        try {
            return User::all();
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

    }

    public function store(Request $request)
    {
        try {
            /*request()->validate([
                'name'     => 'required',
                'mobile'   => 'required',
                'email'    => 'required',
                'password' => 'required',
            ]);*/

            return User::create([
                'name'     => request('name'),
                'mobile'   => request('mobile'),
                'email'    => request('email'),
                'password' => Hash::make(request('password')),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ]);
        }
    }

    public function update(Request $request, User $user)
    {

        try {
            $success = $user->update([
                'name'     => request('name'),
                'mobile'   => request('mobile'),
                'email'    => request('email'),
                'password' => request('password'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ]);
        }

        return ['success' => $success];
    }

    public function destroy(User $user): array
    {

        $success = $user->delete();

        return ['success' => $success];
    }
}
