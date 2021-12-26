<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
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

    public function store(StoreUserRequest $request)
    {

        try {
            $data = $request->validated();
            return User::create($data);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /*public function update(Request $request, User $user)
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
            ], Response::HTTP_NO_CONTENT);
        }

        return ['success' => $success];
    }*/

    public function destroy(User $user): array
    {
        try {
            $success = $user->delete();
            return ['success' => $success];
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ], Response::HTTP_NO_CONTENT);
        }
    }
}
