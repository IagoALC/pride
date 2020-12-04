<?php

namespace App\Http\Controllers\Website;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

        if ($verificaEmailCpf) {
        $appointment = new Appointment();
        $appointment->code = "S" . substr(uniqid(rand()), 0, 5);
        $appointment->service_id = $request->servico;
        $appointment->date = $request->date;
        $appointment->doctor_id = $request->medico;
        $appointment->patient_id = $verificaEmailCpf->id;
        $appointment->status = 'solicitada';
        $appointment->save();

        return redirect()->route('website.consultas.confirmar', ['consulta' => $appointment->code]);
        } else {
            return redirect()->back();
        }


    }

    public function consultasConfirmar($consulta)
    {
        $consulta = DB::table('appointments')
                    ->where('code', '=', $consulta)
                    ->first();
        return view('website.confirmar', ['consulta' => $consulta]);
    }

    public function consultasConfirmarPut(Request $request, Appointment $consulta)
    {
        if ($request->consulta_confirmar == 'confirmar') {
            $consulta = Appointment::where('id', $request->consulta_id)->first();
            $consulta->status = 'confirmada';
            $consulta->save();
            return redirect()->route('website.confirmar.sucesso');
        } else {
            return redirect()->back();
        }
    }

    public function consultasSucesso()
    {
        return view('website.sucesso');
    }

    private function clearField(?string $param)
    {
        if(empty($param)){
            return '';
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
