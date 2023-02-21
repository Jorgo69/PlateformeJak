<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function courses(Cour $formation)
    {
        $formation = Cour::all();
        return view('courses', compact('formation'));
    }

    public function Enregistrer(request $request)
    
    {
        $request->validate([
            'titre_cours' => 'required',
            'url_image' => 'required',
            'description_cours' => 'required',
            'langue_cours' =>  'required',
            'categorie_cours' => 'required',
            'difficulte_cours' => 'required',
            'debouche_cours' => 'required',

        ]);

        $input = $request->all();



        if ($request->hasFile('video_un')) {
            $destination_path =  'public/images/video_un';
            $video_un = $request->file('video_un');
            $video_un_name = $video_un->getClientOriginalName();
            $path = $request->file('video_un')->storeAs($destination_path, $video_un_name);
            $input['video_un'] = $video_un_name;
        }

        if ($request->hasFile('video_deux')) {
            $destination_path =  'public/images/video_deux';
            $video_deux = $request->file('video_deux');
            $video_deux_name = $video_deux->getClientOriginalName();
            $path = $request->file('video_deux')->storeAs($destination_path, $video_deux_name);
            $input['video_deux'] = $video_deux_name;
        }


        if ($request->hasFile('video_trois')) {
            $destination_path =  'public/images/video_trois';
            $video_trois = $request->file('video_trois');
            $video_trois_name = $video_trois->getClientOriginalName();
            $path = $request->file('video_trois')->storeAs($destination_path, $video_trois_name);
            $input['video_trois'] = $video_trois_name;
        }


        if ($request->hasFile('url_image')) {

            $destination_path =  'public/images/url_images';
            $url_image = $request->file('url_image');
            $url_image_name = $url_image->getClientOriginalName();
            $path = $request->file('url_image')->storeAs($destination_path, $url_image_name);
            $input['url_image'] = $url_image_name;
        }

        Cour::create($input);
return redirect()->route('AdminDashboard');
        
    }
}
