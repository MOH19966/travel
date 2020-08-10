<?php

namespace App\Http\Controllers\api\v1;
;

use App\Exports\ExportSchools;
use App\Imports\ImportSchools;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function importExport()
    {
        return view('import');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new ExportSchools, 'users.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        Excel::import(new ImportSchools, request()->file('file'));

        return back();
    }
}
