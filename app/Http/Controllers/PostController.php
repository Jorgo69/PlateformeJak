<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Cour $format){
  
        $format= Cour::all();
        
        return view('accueil', compact('format'));
    }
    
}
