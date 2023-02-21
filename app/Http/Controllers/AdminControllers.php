<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminControllers extends Controller
{
    //

    public function AdDash()
    {
        return view('indexDashboard');
    }

    public function AddCours()
    {
        return view('AddCours');
    }

    public function mesCours()
    {
  
        return view('mesCours');
    }




       
    }




















