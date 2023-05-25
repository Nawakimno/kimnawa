<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function verification1(){
        return view('login2');
    }
    public function verification2(){
        return redirect()->route('dashboard');
    }
}
