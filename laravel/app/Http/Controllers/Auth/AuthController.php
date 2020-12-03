<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function entrar()
    {
        if (Auth::check() === true) {
            return redirect()->route('dashboard.consultas.index');
        }

        return view('website.auth.entrar');
    }

    public function entrarPost(Request $request)
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
        $json['redirect'] = route('dashboard.consultas.index');
        return response()->json($json);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('website.home');
    }

    private function authenticated(string $ip)
    {
        $user = User::where('id', Auth::user()->id);
        $user->update([
            'last_login_at' => date('Y-m-d H:i:s'),
            'last_login_ip' => $ip
        ]);
    }

    public function cadastrar()
    {
        if (Auth::check() === true) {
            return redirect()->route('admin.home');
        }

        return view('auth.register');
    }

    public function cadastrarPost(Request $request)
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
        $user->save();

        $json['message'] = $this->message->success("Você foi cadastrado com sucesso")->render();
        $json['redirect'] = route('auth.cadastrar.sucesso');
        return response()->json($json);
    }

    public function cadastrarSucesso()
    {
        return view('website.auth.sucesso');
    }
}
