<?php

namespace App\Http\Controllers;

use App\Http\CustomResponse;
use App\Models\Ride;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RideController extends Controller
{
    public function index()
    {
        try {
            return Ride::all();
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

    }

    public function store()
    {

        try {
            return User::create([
                'user_id'           => request('user_id'),
                'starting_point'    => request('starting_point'),
                'destination_point' => request('destination_point'),
                'time'              => request('time'),
                'is_booked'         => request('is_booked'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'           => $e->getMessage(),
                'code'              => $e->getCode(),
            ], CustomResponse::MY_CUSTOM_MESSAGE);
        }
    }

    public function update(Ride $ride): \Illuminate\Http\JsonResponse
    {
        try {

            $success = $ride->update([
                'user_id'           => request('user_id'),
                'starting_point'    => request('starting_point'),
                'destination_point' => request('destination_point'),
                'time'              => request('time'),
                'is_booked'         => request('is_booked'),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ], Response::HTTP_NO_CONTENT);
        }

        return ['success' => $success];
    }

    public function destroy(Ride $ride): array
    {
        try {
            $success = $ride->delete();
            return ['success' => $success];
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ], Response::HTTP_NO_CONTENT);
        }
    }
}
