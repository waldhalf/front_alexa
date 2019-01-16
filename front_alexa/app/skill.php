<?php

namespace App;
use App\skill_set;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    public static function skillsJoinSkill_set($id) {
        
        $req = skill::
        join('skill_sets', 'skills.category_number', '=', 'skill_sets.id' )
        ->where('skills.id', '=', $id)
        ->get();
        return $req;
    }

    public static function jointure() {
        
        $req = skill::
        join('skill_sets', 'skills.category_number', '=', 'skill_sets.id' )
        ->get();
        return $req;
    }
}
