<?php
/**
* Created by PhpStorm.
* User: ישראלי
* Date: 14/11/2018
* Time: 20:36
*/

namespace App\repositories;


use App\Mission;

class MissionRepository
{
  function geAll(){
return Mission::all();
}

 function store($data){
return Mission::create($data);
}



 function update($data,Mission $mission){
$mission->update($data);
return $mission;
}


 function remove(Mission $mission)
{
    try {
        $mission->delete();
    } catch (\Exception $e) {
    }
    return $mission;
}
}
