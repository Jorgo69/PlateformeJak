<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;

class OurCoursesController extends Controller
{
    public function ourCourses(Request $request, Cour $courses)
    {

        return view('ourCourses', compact('courses'));
    }

    // public function profilDetail(Request $request, User $users){
            
    //     // $formations=Formation;
    //     $competence=Competence::where('user_id',$users->id) -> get() ;
    //     $formations=Formation::where('user_id',$users->id) -> get() ;

    
    //     return view('adminValidationDetail', compact('users', 'formations', 'competence'));
   
        
    // }


 public function Formation(Request $request, Cour $courses)
    {

        return view('Formation1', compact('courses'));
    }













}
