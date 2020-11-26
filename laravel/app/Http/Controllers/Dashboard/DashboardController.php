<?php

namespace App\Http\Controllers\Dashboard;

use App\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function home()
    {
        $user = Auth::user()->id;
        $appointments = DB::table('appointments')
                        ->where('patient_id', '=', $user)
                        ->orWhere('doctor_id', '=', $user)
                        ->get();

        return view('admin.index')->with('appointments', $appointments);
    }
}
