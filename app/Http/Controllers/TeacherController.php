<?php

namespace App\Http\Controllers;

use App\College;
use App\University;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        //
        $u = curr_user();
        $TeachersNames = $u->giveMeTeachers(request()->subject); // i send subj id to function

        return view('subject.indexTeachers', compact('TeachersNames'));
        //return redirect()->route('sub.index',['TeachersNames'=> $TeachersNames]);
    }

    
    public function create()
    {
        $g = 'null';
        //get all subjects in the college of this user related to his year and under
        $x = curr_user()->suggestedSubjects(curr_user()->info);
        $y = College::all();
        $z = University::all();
        // dd($z);

        return view('subject.request', compact(['x', 'y', 'z']));
    }
}
