<?php

namespace App\Http\Controllers;

use App\User;

class SubjectController extends Controller
{

    //return every subject in the user college related yi his year
    public function create()
    {

        $u = auth()->user()->info;
        $x = auth()->user()->suggestedSubjects($u);
        //dd($x);

        return view('subject.create', ['subjects' => $x, 'id' => auth()->user()]);
    }

    public function store($request)
    {

        /*
        add subject : funstion take an array of subject id
        and linked it to user through table "selected_users
        and i define name for subject checkbox in thr front as
        name="subject[{{$s->id}}]" id="{{$s->id}}"
         */
        curr_user()->addSubject(request()->input('subject'));
        return redirect()->route('InfoComplete',curr_user_id());

    }
}
