<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Lab;
use App\Models\User;

class AppointmentsController extends Controller
{
    public function showinfo(Appointment $appointment, Lab $lab, User $user)
    {
        return view('pages.showinfo',compact('appointment','lab','user'));
    }
}
