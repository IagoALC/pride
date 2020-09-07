<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function registerForm()
    {
        return view('admin.auth.register');
    }

    public function checkMail()
    {
        return view('admin.auth.checkmail');
    }

    public function forgotForm()
    {
        return view('admin.auth.pass.forgot');
    }


}
