<?php

namespace App\Http\Controllers\api\v1;;

use App\User;
use App\College;
use App\University;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $u=curr_user();
         $TeachersNames=$u->giveMeTeachers(request()->subject); // i send subj id to function

         return response([
            'TeachersNames'=> $TeachersNames
            ]);


    }


    public function create()
    {    $g='null';
        //get all subjects in the college of this user related to his year and under
        $x = curr_user()->suggestedSubjects(curr_user()->info);
        $y=College::all();
        $z = University::all();
       // dd($z);


        return response ( [
            'subjects'=>$x
            ,'colleges'=>$y
            ,'universities'=>$z
            ]);
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
