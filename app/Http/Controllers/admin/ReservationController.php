<?php

namespace App\Http\Controllers\admin;

use App\reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }
}
