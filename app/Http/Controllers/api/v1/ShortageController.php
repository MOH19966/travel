<?php

namespace App\Http\Controllers\api\v1;

use App\Grade;
use App\Http\Requests\ShortageStoreRequest;
use App\Http\Requests\ShortageUpdateRequest;
use App\Material;
use App\School;
use App\Shortage;
use Illuminate\Http\Request;

class ShortageController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd("ddd");
        $shortages = Shortage::all();

        return response(
    [
           'shortages'=> $shortages

    ]);

    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //d('ddd');
        $schools = School::all()->pluck('name');
        $materials = Material::select('id', 'name')->get();
        $grades = Grade::select('id', 'name')->get();

        return response(
            [
                'schools' => $schools,
                'materials' => $materials,
                'grades' => $grades,

            ]);
    }

    /**
     * @param \App\Http\Requests\ShortageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShortageStoreRequest $request)
    {
        //dd('dd');
        // dd($request->all());

        $request->validate([
            'school_name' => 'required',
            'grade_id' => 'exists:App\Grade,id',
            'material_id' => 'exists:App\Material,id',
            'grade_type' => 'required |max:1',
            'houres' => 'required',
        ]);

        // i put those three lines so i can show everu thing in shortages table
        //for performance

        $school_id = School::where('name', $request->school_name)->pluck('id');
        $grade_name = Grade::where('id', $request->grade_id)->pluck('name');
        $material_name = Material::where('id', $request->material_id)->pluck('name');

        // dd( $school_id);

        $shortage = Shortage::create(

            ['school_id' => $school_id[0],
                'school_name' => $request->school_name,

                'grade_id' => $request->grade_id,
                'grade_name' => $grade_name[0],
                'grade_type' => $request->grade_type,

                'material_id' => $request->material_id,
                'material_name' => $material_name[0],

                'houres' => $request->houres,

            ]);
        //  dd('dd');

        // $request->session()->flash('shortage.id', $shortage->id);
        // $request->session()->flash('success', 'عشت يا أبو علي');

        return 1;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shortage $shortage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Shortage $shortage)
    {
        return response([
            'shortage' => $shortage,
        ]);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shortage $shortage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Shortage $shortage)
    {
        return view('shortage.edit', compact('shortage'));
    }

    /**
     * @param \App\Http\Requests\ShortageUpdateRequest $request
     * @param \App\Shortage $shortage
     * @return \Illuminate\Http\Response
     */
    public function update(ShortageUpdateRequest $request, Shortage $shortage)
    {
        $request->session()->flash('shortage.id', $shortage->id);

        return redirect()->route('shortage.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Shortage $shortage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Shortage $shortage)
    {
        $shortage->delete();

        return redirect()->route('shortage.index');
    }
}
