<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $contagemUsuarios = User::all()->count();
        return view('website.welcome', ['contagemUsuarios' => $contagemUsuarios]);
    }
}
