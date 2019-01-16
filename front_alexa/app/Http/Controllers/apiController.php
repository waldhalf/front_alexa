<?php

namespace App\Http\Controllers;
use App\skill;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function presentation(){
        $speech = skill::where('default_speech', '=', TRUE)
        ->where('category_number', '=', 6)
        ->get();

        $array_speech = $speech->toArray();
        $json = json_encode($array_speech,JSON_UNESCAPED_UNICODE);
        return view('api.presentation')->with('json', $json);
    }
}
