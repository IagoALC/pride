<?php

namespace App\Http\Controllers\Website;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function home()
    {
        $contagemUsuarios = User::all()->count();
        $medicos = DB::table('users')
            ->where([
                ['role', '=', 'médico'],
                ['status', '=', 1]
            ])
            ->orderBy('first_name', 'ASC')
            ->get();
        return view('website.welcome', ['contagemUsuarios' => $contagemUsuarios, 'medicos' => $medicos]);
    }

    public function consultaStore(Request $request)
    {
        $cpf = $this->clearField($request->cpf);
        $verificaEmailCpf = DB::table('users')
            ->where([
                ['document', '=', $cpf],
                ['email', '=', $request->email]
            ])
            ->first();

        $patient_id = $verificaEmailCpf->id;

        $appointment = new Appointment();
        $appointment->code = "S" . substr(uniqid(rand()), 0, 5);
        $appointment->service_id = $request->servico;
        $appointment->date = $request->date;
        $appointment->doctor_id = $request->medico;
        $appointment->patient_id = $patient_id;
        $appointment->status = 'solicitada';
        $appointment->save();

        return redirect()->route('website.consultas.confirmar');
    }

    public function consultasConfirmar()
    {
        return view('website.confirmar');
    }

    private function clearField(?string $param)
    {
        if(empty($param)){
            return '';
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
