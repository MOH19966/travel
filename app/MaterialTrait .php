<?php

namespace App;

use App\Info;
use App\Material;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait MaterialTrait
{

    /**

     * @param Request $request

     * @return $this|false|string

     */
    // related to selectedsubjects pivot table

    public function materials()
    {

        return $this->belongsToMany(\App\Material::class);
    }

    // add one or an array of subjects to Selected_Subjects table
    public function addMaterial($material)
    { //get sub related to this college and university

        return $this->materials()->sync($material, false);

    }

public function suggestedSchools()

{
    // SELECT sh.school_name, sh.material_name, sh.grade_name
    //  FROM shortages sh
    //   INNER JOIN schools s
    //    ON s.id =sh.school_id
    //    WHERE (s.city = 'Abdulhaven')
    //    AND sh.material_id in (1,2)

        //user->city
        $user_city=$this->info->city;
        // materials that_user_select to teach
        $user_selected_materials= $this->materials->map->pluck('id')->flatten()->unique();
        //$user_selected_materials = json_decode(json_encode($user_selected_materials), true);

      // dd($user_selected_materials);

    $z = DB::table('shortages')
    ->join('schools','schools.id','=','shortages.school_id')
    ->select('shortages.school_name', 'shortages.material_name','shortages.grade_name')

    ->where('schools.city', $user_city)
    ->whereIn('shortages.material_id',$user_selected_materials)
    ->get();

return $z;

}







}
