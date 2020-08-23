<?php

namespace App\Http\Controllers\api\v1;

use App\User;
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
$x=1;

        $ides = curr_user()->checkIfRequestedSubjectChoosenByTheUSerToTeach(request()->subject);
if (in_array(1,(array)$ides)) {
    return response([
        'message' => "عم تتخوت ع سمانا ، مانك حطط بدك تدرسها",

    ]);
}

        // give me teachers that can teach what i hace entered
        $u = curr_user();
        $TeachersNames = $u->giveMeTeachers(request()->subject); // i send subj id to function
        //loop over every student and add his rating to his info
        foreach ($TeachersNames as $Teacher) {
            $rating = User::findOrFail($Teacher->user_id)->first()->averageRating;
            $Teacher->rate = $rating;
             }
        //dd($TeachersNames);
        return response([
            'TeachersNames' => $TeachersNames,
        ]);

    }

    public function create()
    {
        //get all subjects in the college of this user related to his year and under
        $x = curr_user()->suggestedSubjects(curr_user()->info);

        return response([
            'subjects' => $x
            ,
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
