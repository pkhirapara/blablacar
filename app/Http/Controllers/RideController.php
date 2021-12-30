<?php

namespace App\Http\Controllers;

use App\Http\CustomResponse;
use App\Http\Requests\StoreUserRequest;
use App\Models\Ride;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RideController extends Controller
{
    public function index()
    {
        try {
            $rides = Ride::all();

            return view('pages.rides.index', compact('rides'));

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'code'    => $e->getCode(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

    }

    public function create(){

        return view('pages.rides.create');
    }

    public function store()
    {

        try {

            $data = request()->validate([
                'user_id' => 'required',
                'starting_point' => 'required',
                'destination_point' => 'required',
                'time' => 'required',
                'is_booked' => 'required'
            ]);

            Ride::create($data);

            return redirect('/rides');

        } catch (\Exception $e) {
            return response()->json([
                'message'           => $e->getMessage(),
                'code'              => $e->getCode(),
            ]);
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
