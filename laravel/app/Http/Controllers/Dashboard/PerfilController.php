<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contagemConsultas = DB::table('appointments')
            ->where([
                ['patient_id', '=', Auth::user()->id]
            ])->orWhere([
                ['doctor_id', '=', Auth::user()->id],
                ['status', '!=', 'solicitada'],
                ['status', '!=', 'cancelada']
            ])
            ->count();
        $user = User::where('id', Auth::user()->id)->first();
        $contagemUsuarios = User::all()->count();
        return view('dashboard.perfil.index', ['user' => $user, 'contagemUsuarios' => $contagemUsuarios, 'contagemConsultas' => $contagemConsultas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $perfil)
    {
        if ($request->role != null){
            $perfil->role = $request->role;
        } else {
            $perfil->role = $perfil->role;
        }

        if ($request->cover != null){
            $perfil->cover = $request->file('cover')->store('user/cover');
        } else {
            $perfil->cover = $perfil->cover;
        }

        $perfil->first_name = $request->first_name;
        $perfil->last_name = $request->last_name;

        $perfil->document = $request->document;

        $perfil->newsletter = $request->newsletter;

        $perfil->telephone = $request->telephone;
        $perfil->cell = $request->cell;


        $perfil->email = $request->email;
        $perfil->password = $request->password;

        $perfil->save();

        return redirect()->back();
    }

    public function desativarConta(User $perfil)
    {
        $perfil->status = 0;
        $perfil->save();

        return redirect()->back();
    }

    public function reativarConta(User $perfil)
    {
        $perfil->status = 1;
        $perfil->save();

        return redirect()->back();
    }
}
