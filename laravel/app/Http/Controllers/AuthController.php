<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check() === true) {
            return redirect()->route('admin.home');
        }

        return view('auth.login');
    }

    public function loginDo(Request $request)
    {
        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = $this->message->dark("Oops, informe todos os dados para efetuar o login")->render();
            return response()->json($json);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->dark("Oops, informe um e-mail válido")->render();
            return response()->json($json);
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) {
            $json['message'] = $this->message->dark("Oops, usuário e senha não conferem")->render();
            return response()->json($json);
        }

        $json['message'] = $this->message->success("Você será redirecionado para a plataforma")->render();
        $this->authenticated($request->getClientIp());
        $json['redirect'] = route('admin.home');
        return response()->json($json);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    private function authenticated(string $ip)
    {
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
    }

    public function showRegisterForm()
    {
        if (Auth::check() === true) {
            return redirect()->route('admin.home');
        }

        return view('auth.register');
    }

    public function registerDo(Request $request)
    {
        if (in_array('', $request->only('first', 'last', 'cpf', 'genre', 'dateOfBirth', 'cameFrom', 'cell',
            'email', 'password', 'newsletter'))) {
            $json['message'] = $this->message->dark("Oops, informe todos os dados para efetuar o cadastro")->render();
            return response()->json($json);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = $this->message->dark("Oops, informe um e-mail válido")->render();
            return response()->json($json);
        }

        $verificaCPF = DB::table('users')
            ->where('document', '=', $request->cpf)
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
        $user->first_name = $request->first;
        $user->last_name = $request->last;
        $user->document = $request->cpf;
        $user->genre = $request->genre;
        $user->date_of_birth = $request->dateOfBirth;
        $user->came_from = $request->cameFrom;
        $user->cell = $request->cell;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->newsletter = $request->newsletter;
        $user->save();

        $json['message'] = $this->message->success("Você foi cadastrado com sucesso")->render();
        $json['redirect'] = route('login');
        return response()->json($json);
    }
}
