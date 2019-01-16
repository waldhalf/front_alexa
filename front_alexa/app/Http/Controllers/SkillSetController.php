<?php

namespace App\Http\Controllers;

use App\skill_set;
use App\skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class SkillSetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $skill_set_list = skill_set::orderBy('id', 'DESC')->paginate(10);
        $skill_set_list = skill_set::all();

        return view('skills_set_index')->with('skills_set', $skill_set_list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skill_set_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation du formulaire create_skill
        $validatesData = $request->validate([
            'skill_name' => 'required|max:255',
            ]);

        $skill = new skill_set;
        $skill->skill_set_name = $request->skill_name;

        $skill->save();

        // On créé un flash message qui sera envoyé à la prochaine view (only once)
        Session::flash('msg', 'La skill a bien été sauvée dans le base de données');

        return redirect('/skills_set');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\skill_set  $skill_set
     * @return \Illuminate\Http\Response
     */
    public function show(skill_set $skill_set)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\skill_set  $skill_set
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = skill_set::find($id);
        // dd($skill);
        // $array_skill = $skill->toArray();
        // $json = json_encode($array_skill,JSON_UNESCAPED_UNICODE);
        return view ('skill_set_edit')->with('skill', $skill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\skill_set  $skill_set
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation du formulaire skill_show_skill
        $validatesData = $request->validate([
            'skill_name' => 'required|max:255',
            ]);

        $skill = skill_set::find($id);
        // dd($skill);
        $skill->skill_set_name = $request->skill_name;

        $skill->save();

        // On créé un flash message qui sera envoyé à la prochaine view (only once)
        Session::flash('msg', 'La skill a bien été updatée dans le base de données');

        return redirect('/skills_set');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\skill_set  $skill_set
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //On récupére le skill qui a été passé en paramétre
        $skill = skill_set::find($id);
        // On l'efface
        $skill->delete();
        // On indique que tout s'est bien passé via un flash message
        Session::flash('msg', 'Le skill a bien été supprimé dans le base de données');
        return redirect()->route('skills_set.index');
    }

    public function default($id)
    {
        //On récupére le skill qui a été passé en paramétre
        $skill = skill_set::find($id);
        $speeches = skill::where('category_number', '=', $id )->get();
        return view('skill_set_default')->with('skill',$skill)->with('speeches', $speeches);
    }

    public function defaultStore(Request $request, $id)
    {
        //On récupére le skill qui a été passé en paramétre
        $skill = skill_set::find($id);
        $speech_id = $request->skill_set_id;
        $generic_speech = skill::find($speech_id);

        // On update la BD pour passer tout les speeches à false par défaut
        skill::where('category_number', '=', $generic_speech->category_number)->update(['default_speech' => FALSE]);
        
        // On retrouve le speech que 'lon souhaite mettre par défaut et on assigne TRUE 
        $specific_speech = skill::find($speech_id);
        $specific_speech->default_speech = TRUE;
        $specific_speech->save();

        // On indique que tout s'est bien passé via un flash message
        Session::flash('msg', 'Le speech a bien été affecté à la skill');

        return redirect()->route('skills_set.index');
    }
}
