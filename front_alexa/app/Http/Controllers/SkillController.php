<?php

namespace App\Http\Controllers;

use App\skill;
use App\skill_set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill_list = skill::jointure();
        // $skill_list = skill::orderBy('id', 'DESC')->paginate(10);

        return view('skills_index')->with('skills', $skill_list);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skill_set = skill_set::all();
        return view('skills_create')->with('skill_set', $skill_set);
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
            'client_name' => 'required|max:255',
            'skill_content_01' => 'required',
            'skill_set_name' => 'required',
            ]);
        // On récupére id de l'author
        $user_id = Auth::id();
        $skill = new skill;
        $skill->client_name = $request->client_name;
        $skill->skill_content_01 = $request->skill_content_01;
        $skill->category_number = $request->skill_set_name;
        // dd($request->skill_set_name);
        $skill->author_id = $user_id;

        $skill->save();

        // On créé un flash message qui sera envoyé à la prochaine view (only once)
        Session::flash('msg', 'La skill a bien été sauvée dans le base de données');

        return redirect('/skills');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = skill::find($id);
        $skill_set = skill_set::all();
        // $array_skill = $skill->toArray();
        // $json = json_encode($array_skill,JSON_UNESCAPED_UNICODE);
        return view ('skill_show')->with('skill', $skill)->with('skill_set', $skill_set);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation du formulaire skill_show_skill
        $validatesData = $request->validate([
            'client_name' => 'required|max:255',
            'skill_content_01' => 'required',
            ]);
        // On récupére id de l'author
        $user_id = Auth::id();
        $skill = skill::find($id);
        $skill->client_name = $request->client_name;
        $skill->skill_content_01 = $request->skill_content_01;
        $skill->author_id = $user_id;
        $skill->category_number = $request->skill_set_name;

        $skill->save();

        // On créé un flash message qui sera envoyé à la prochaine view (only once)
        Session::flash('msg', 'La skill a bien été updaté dans le base de données');

        return redirect('/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //On récupére le skill qui a été passé en paramétre
        $skill = skill::find($id);
        // On l'efface
        $skill->delete();
        // On indique que tout s'est bien passé via un flash message
        Session::flash('msg', 'Le skill a bien été supprimé dans le base de données');
        return redirect()->route('skills.index');
    }
}
