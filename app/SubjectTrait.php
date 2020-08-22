<?php

namespace App;

use App\Info;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait SubjectTrait
{

    /**

     * @param Request $request

     * @return $this|false|string

     */
    // related to selectedsubjects pivot table

    public function subjects()
    {

        return $this->belongsToMany(\App\Subject::class, 'selected_subjects');
    }

    // add one or an array of subjects to Selected_Subjects table
    public function addSubject($subject)
    { //get sub related to this college and university

        return $this->subjects()->sync($subject, false);

    }

    // related to requestedsubjects pivot table
    public function reqSubjects()
    {

        return $this->belongsToMany(\App\Subject::class, 'requested-subjects');
    }

    public function addReqSubject($subject_id)
    {

        return $this->reqSubjects()->sync($subject_id, false);

    }

    public function suggestedSubjects($u )
    {
    /*        if(is_null($x))
            {
                $x=$u->college;
            }*/



        // query to join 3 tables to get subjects that user can choose from to teach
        $data = DB::table('subjects')
            ->join('colleges', 'colleges.id', '=', 'subjects.college_id')
            ->join('universities', 'universities.id', '=', 'colleges.university_id')
            ->select('subjects.name', 'subjects.year', 'subjects.id')
            ->where('colleges.name', $u->college)
            ->where('universities.name', $u->university)
            ->where('subjects.year', '<=', $u->year) //add+1
            ->get()->toArray();

        return $data;

    }
    public function teachersRelatedIdes($subject_id)
    {
        $z = DB::table('selected_subjects')
            ->select('selected_subjects.user_id')
            ->where('selected_subjects.subject_id', $subject_id)
            ->get();
        //"Object of class stdClass could not be converted to string"
        // Converting object to associative array
        $z = json_decode(json_encode($z), true);

        return $z;
    }

    public function giveMeTeachers($subject_id)
    {
        //add subject_id to requestes_subjects table
        $this->addReqSubject($subject_id);
        $z=$this->teachersRelatedIdes($subject_id);
        // i dont use pluck cause in t brings one column
        $u = Info::whereIn('user_id',$z )
            ->select('user_id','fname','lname','user_image' ,'college')->get()
            ->sortBy('user_id');// here is add sort by rating


          // dd($u);
        return $u;

    }



}
