<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contagemUsuarios = User::all()->count();
        $users = User::all();
        return view('dashboard.usuarios.index', ['contagemUsuarios' => $contagemUsuarios, 'users' => $users]);
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
        if (in_array('', $request->only('firstName', 'lastName', 'document', 'email',
            'password', 'cell'))) {
            $json['message'] = $this->message->dark("Oops, informe todos os dados para efetuar o cadastro")->render();
            return response()->json($json);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->dark("Oops, informe um e-mail válido")->render();
            return response()->json($json);
        }

        $verificaCPF = DB::table('users')
            ->where('document', '=', $request->document)
            ->count('document');

        if ($verificaCPF > 0) {
            $json['message'] = $this->message->dark("Oops, CPF já cadastrado em nosso sistema")->render();
            return response()->json($json);
        }

        $verificaCell = DB::table('users')
            ->where('cell', '=', $request->cell)
            ->count('cell');

        if ($verificaCell > 0) {
            $json['message'] = $this->message->dark("Oops, celular já cadastrado em nosso sistema")->render();
            return response()->json($json);
        }

        $verificaEmail = DB::table('users')
            ->where('email', '=', $request->email)
            ->count('email');

        if ($verificaEmail > 0) {
            $json['message'] = $this->message->dark("Oops, email já cadastrado em nosso sistema")->render();
            return response()->json($json);
        }

        $user = new User();
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->document = $request->document;
        $user->cell = $request->cell;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status = 1;
        $user->role = $request->role;
        $user->save();

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
        $user = User::where('id', $id)->first();
        $contagemUsuarios = User::all()->count();
        return view('dashboard.usuarios.show', ['user' => $user, 'contagemUsuarios' => $contagemUsuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $usuario)
    {
        $usuario = User::where('id', $usuario)->first();

        if ($request->role != null){
            $usuario->role = $request->role;
        } else {
            $usuario->role = $usuario->role;
        }

        if ($request->cover != null){
            $usuario->cover = $request->file('cover')->store('user/cover');
        } else {
            $usuario->cover = $usuario->cover;
        }

        $usuario->first_name = $request->first_name;
        $usuario->last_name = $request->last_name;

        $usuario->document = $request->document;

        $usuario->newsletter = $request->newsletter;

        $usuario->telephone = $request->telephone;
        $usuario->cell = $request->cell;


        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->save();

        return redirect()->back();
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
}
