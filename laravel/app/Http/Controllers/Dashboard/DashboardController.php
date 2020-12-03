<?php

namespace App\Http\Controllers\Dashboard;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function home()
    {
        $appointments = DB::table('appointments')
                        ->where([
                            ['patient_id', '=', Auth::user()->id],
                            ['status', '=', 'agendado'],
                            ['day', '>=', now()]
                        ])
                        ->orWhere([
                            ['doctor_id', '=', Auth::user()->id],
                            ['status', '=', 'agendado'],
                            ['day', '>=', date('m/d/Y h', time())]
                        ])
                        ->orderBy('day', 'ASC')
                        ->get();

        return view('admin.index')->with('appointments', $appointments);
    }

    public function consultas()
    {
        $contagemUsuarios = User::all()->count();
        return view('dashboard.consultas.index', ['contagemUsuarios' => $contagemUsuarios]);
    }

    public function servicos()
    {
        return view('dashboard.servicos.index');
    }

    public function usuarios()
    {
        return view('dashboard.usuarios.index');
    }
}
