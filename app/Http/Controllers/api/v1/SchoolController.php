<?php

namespace App\Http\Controllers\api\v1;

use App\Material;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SchoolController extends Controller
{
    /**
     * @param \App\Http\Requests\SchoolStoreRequest $request
     * @return \Illuminate\Http\Response
     */

     //save materials to user materials
    public function save(Request $request)
    {
        curr_user()->addMaterial(request()->input('material'));

        return response([
            'message' => 'materials where added',
            'shortages' => curr_user()->suggestedSchools(),

        ]);
    }

    //return al materials
    public function select(Request $request)
    {
        $materials = Material::all();

        return response([
            'materials' => Material::all(),

        ]);
    }
    //return schools
    public function index()
    {
        $shortages = curr_user()->suggestedSchools();

        return response([
            'shortages' => curr_user()->suggestedSchools(),

        ]);

    }
}
