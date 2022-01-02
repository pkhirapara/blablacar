<?php

namespace App\Http\Controllers;

use App\Http\CustomResponse;
use App\Http\Requests\StoreRideRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateRideRequest;
use App\Models\Ride;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RideController extends Controller
{
    public function index()
    {
        $rides = Ride::all();

        return view('pages.rides.index', compact('rides'));

    }

    public function create(){

        return view('pages.rides.create');
    }

    public function store(StoreRideRequest $request)
    {
        $data = $request->validated();

        Ride::create($data);

        return redirect('/rides');
    }

    public function show(Ride $ride){

        return view('pages.rides.show', compact('ride'));
    }

    public function edit(Ride $ride){
        return view('pages.rides.edit', compact('ride'));
    }

    public function update(Ride $ride, UpdateRideRequest $request)
    {
        $data = $request->validated();

        Ride::update($data);

        return redirect('/rides');
    }

    public function destroy(Ride $ride)
    {
        $ride->delete();

        return redirect('/rides');
    }
}
