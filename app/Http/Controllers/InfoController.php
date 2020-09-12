<?php

namespace App\Http\Controllers;

use App\Area;
use App\City;
use App\College;
use App\Events\EnrollTeacherNumber;
use App\Info;
use App\State;
use App\University;
use App\User;
use App\Village;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // here to create
        //dd('111');

        return view('info.create',
            [ // vars sent to view
                'id' => auth()->user(),
                'universities' => University::all(),
                'colleges' => College::all(),
                'years' => [1, 2, 3, 4, 5, 6, 7],
                'states' => State::all(),
                'cities' => City::all(),
                'areas' => Area::all(),
                'villages' => Village::all(),

            ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         dd( $request->all());
        // if this user not complete his info then cerate info else update existing
        if (curr_user()->info_completed === 0) {
            info::create($this->validatedAttributes());
            $s = User::find(curr_user_id());
            $s->info_completed = 1;
            $s->save();

            // curr_user()->info_completed=1; // to edit table field in users so rediect to home
        } else {
            info::Where('user_id', curr_user_id())->update($this->validatedAttributes());
        }

        // dd( $request->all());

        return redirect()->route('home')->with([
            'message'=>'Info completed'
        ]);;

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
        $PI = Info::where('user_id', $id)->first();

        $rating = User::findOrFail($id)->first()->averageRating;

        return view('info.show', compact(['PI', 'rating']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('info.edit',
            [ // vars sent to view
                'id' => curr_user(),
                'universities' => University::all(),
                'colleges' => College::all(),
                'years' => [1, 2, 3, 4, 5, 6, 7],
                'states' => State::all(),
                'cities' => City::all(),
                'areas' => Area::all(),
                'villages' => Village::all(),
                'info' => Info::where('user_id', $id)->first(), // wrong
            ]);

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

        //dd($request);
        info::Where('user_id', curr_user_id())->update($this->validatedAttributes());
        //dd('ddd');
        return redirect()->route('info.profile', ['id' => $id]);

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

    public function validatedAttributes()
    {

        return request()->validate([
            'university' => 'required |string', // |unique:posts|max:255
            'college' => 'required', //exists:college,name
            'fname' => 'required |string',
            'lname' => 'required |string',
            'gender' => 'required ',

            'state' => 'required',
            'area' => 'required',
            'village' => 'required', //nullable
            'city' => 'required',
            'year' => 'required',
            'user_id' => 'exists:App\User,id',

        ]);
        // dd('dddd');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function enroll()
    {
        //1- send message to user  cpontains the selected user number
        //2_Send notificarion to student to rate
        //3_send motificatiom to teacher tp accept rate from specific student
        //4_edit teacher rating

        $teacher_id = request()->teacher_id;
        $teacher_full_name = request()->teacher_full_name;
        $user_id = request()->id;
        //dd( $user_id);

        EnrollTeacherNumber::dispatch($teacher_id, $teacher_full_name, $user_id);

        //  /request()->user()->notify(new RateTeacher($teacher_id, $teacher_full_name));

    }

    public function uploadImages()
    {
        return view('info.uploadImages');

    }

    public function storeImages()
    {

         //dd( request()->personalPhoto) ;
        request()->validate([

            'collegePhoto' => 'required|file|between:40,10000',
            'personalPhoto' => 'required|file|between:40,10000',

        ]

        );
        $collegeCard = request('collegePhoto')->storeAs('CollegeCards', curr_user_id());
        $personalPhoto = request('personalPhoto')->storeAs('PersonalPhotos', curr_user_id());

        $info = Info::Where('user_id', curr_user_id())->first();
        // dd($info);
        if (is_null($info->college_card_image)) {
            $info->college_card_image = $collegeCard;
        }

        if (is_null($info->user_image)) {
            $info->user_image = $personalPhoto;
        }
        $info->save();

        // dd($info);

        return redirect()->route('home');
    }
}
