<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\User;
use DB;

class AppointmentsController extends Controller
{
    public function showinfo(Appointment $appointment, User $user)
    {
        $appointment = DB::table('appointments')->get();
        $user = DB::table('users')
            ->join('appointments', 'users.id', '=', 'appointments.user_id')
            ->select('users.name')
            ->get();
        return view('pages.showinfo',compact('appointment','user'));
    }
}
