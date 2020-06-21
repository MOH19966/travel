<?php

namespace App\Http\Controllers;

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

         return view('subject.indexTeachers',compact('TeachersNames'));
         //return redirect()->route('sub.index',['TeachersNames'=> $TeachersNames]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $g='null';
        //get all subjects in the college of this user related to his year and under
        $x = curr_user()->suggestedSubjects(curr_user()->info);
        $y=College::all();
        $z = University::all();
       // dd($z);


        return view('subject.request',compact(['x','y','z']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
