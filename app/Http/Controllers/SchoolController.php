<?php

namespace App\Http\Controllers;


use App\Material;
use App\MaterialTrait;
use App\School;
use App\user;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * @param \App\Http\Requests\SchoolStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        curr_user()->addMaterial(request()->input('material'));



      return   redirect()->route('school.suggest');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function select(Request $request)
    {
        $materials = Material::all();

        return view('school.selectMaterials', compact('materials'));
    }



    public function index()
    {
        $shortages = curr_user()->suggestedSchools();

        return view('school.suggestedSchools',compact('shortages'));
    }
}
