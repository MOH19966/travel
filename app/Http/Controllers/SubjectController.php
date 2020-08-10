<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    //return every subject in the user college related yi his year
    public function create()
    {

        $u = curr_user()->info;
        //return all subjects that the user can teach according to his years
        $subjects = curr_user()->suggestedSubjects($u);
        //dd($x);

        return view('subject.create',
         [
             'subjects' => $subjects
          ]);
    }

    public function store(Request $request)
    {

        /*
        add subject : funstion take an array of subject id
        and linked it to user through table "selected_users
        and i define name for subject checkbox in thr front as
        name="subject[{{$s->id}}]" id="{{$s->id}}"
         */
         if (is_null(request()->input('subject')))
         {
             $request->session()->flash('error', 'لم تقم بتحديد أي مواد');
                return redirect()->route('sub.select');
         }
        curr_user()->addSubject(request()->input('subject'));
        return redirect()
        ->route('InfoComplete');

    }
}
