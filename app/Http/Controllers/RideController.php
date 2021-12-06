<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Models\User;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index(){
        //$users = User::all();

        return Ride::all();

    }
}
