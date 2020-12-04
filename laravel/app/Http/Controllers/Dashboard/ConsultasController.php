<?php

namespace App\Http\Controllers\Dashboard;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contagemUsuarios = User::all()->count();
        $contagemConsultas = DB::table('appointments')
            ->where([
                ['patient_id', '=', Auth::user()->id]
            ])->orWhere([
                ['doctor_id', '=', Auth::user()->id],
                ['status', '!=', 'solicitada'],
                ['status', '!=', 'cancelada']
            ])
            ->count();

        $consultas = DB::table('appointments')
            ->where([
                ['patient_id', '=', Auth::user()->id]
            ])
            ->orWhere([
                ['doctor_id', '=', Auth::user()->id],
                ['status', '!=', 'solicitada'],
                ['status', '!=', 'cancelada']
            ])
            ->orderBy('date', 'ASC')
            ->get();

        $medicos = DB::table('users')
            ->where([
                ['role', '=', 'médico'],
                ['status', '=', 1]
            ])
            ->orderBy('first_name', 'ASC')
            ->get();
        return view('dashboard.consultas.index', ['contagemUsuarios' => $contagemUsuarios, 'consultas' => $consultas, 'medicos' => $medicos, 'contagemConsultas' => $contagemConsultas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        if (Auth::user()->role == 'cliente'){
            if ($request->status) {
                $appointment->status = $request->status;
            } else {
                $appointment->status = 'solicitada';
            }
        } else {
            $appointment->status = 'confirmada';
        }
        $appointment->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cancelar(Appointment $consulta)
    {
        $consulta->status = 'cancelada';
        $consulta->save();

        return redirect()->back();
    }

    public function realizada(Appointment $consulta)
    {
        $consulta->status = 'realizada';
        $consulta->save();

        return redirect()->back();
    }

    private function clearField(?string $param)
    {
        if(empty($param)){
            return '';
        }

        return str_replace(['.', '-', '/', '(', ')', ' '], '', $param);
    }
}
