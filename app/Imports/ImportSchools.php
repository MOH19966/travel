<?php

namespace App\Imports;

use App\School;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportSchools implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new School([
              'statistical_number'     => $row[0],
              'name'                   => $row[1],
              'educ_stage'             => explode('+' ,$row[2]),
              'phone'                  => $row[3],
              'address'                => $row[4],
              'state_id'               => $row[5],
              'city'                   => $row[6],
              'area'                   => $row[7],
              'village'                => $row[8],

            //
        ]);
    }
}

