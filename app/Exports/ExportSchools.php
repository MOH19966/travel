<?php

namespace App\Exports;

use App\School;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportSchools implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return School::all();
    }
}
