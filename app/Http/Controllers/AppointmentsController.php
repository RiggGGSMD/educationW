<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Lab;
use DB;
use Auth;
use Carbon\Carbon;

class AppointmentsController extends Controller
{
    public function info(Appointment $appointment, User $user)
    {
        $appointment = DB::table('appointments')->get();
        $user = DB::table('users')
            ->join('appointments', 'users.id', '=', 'appointments.user_id')
            ->select('users.name')
            ->get();
        return view('pages.showinfo',compact('appointment','user'));
    }
    public function appoint()
    {
        $user_ids = Auth::user()->id;
        $lab_ids = array_column(DB::select('select id from labs'),'id')[0];
        $now = Carbon::now()->toDateTimeString();
        $end = Carbon::now()->toDateTimeString();
        $bool = DB::table('appointments')
            ->insert(['lab_id' => $lab_ids,'user_id'=>$user_ids,'appointment_time'=>$now,'appointment_end'=>$end,'created_at' => $now,'updated_at' => $now]);
        return redirect()->route('appointment_finish')->with('message', '预约成功!');
    }
    public  function show()
    {
        return view('pages.appointment');

    }
}
