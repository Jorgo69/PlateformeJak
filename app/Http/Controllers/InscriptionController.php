<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscription()
    {
        return view('signUp');
    }

    public function connexion()
    {
        return view('loginUser');
    }

    public function forgetPassword()
    {
        return view('forgetPassword');
    }
}
