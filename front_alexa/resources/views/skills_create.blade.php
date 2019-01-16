@extends('layouts.my_layout')

@section('content')

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <h1 class="h1_form">Formulaire de création de speech</h1>
        <hr>

        <form action="#" method="POST">
            @csrf
            <label for="client_name">Nom du client</label>
            <input type="text" name="client_name" class="form-control">

            <label for="skill_content_01">Texte du premier intent</label>
            <textarea cols="30" rows="10" name="skill_content_01" class="form-control"></textarea>

            <label for="skill_set_name">Nom du skill</label>
            <select name="skill_set_name" class="form-control">
                @foreach ($skill_set as $skill)
                    <option value="{{ $skill->id }}">{{ $skill->skill_set_name }}</option>
                @endforeach
            </select>
            <hr>

            <button class="button_form" type="submit">Créer le contenu du skill</button>
        </form>
    </div>
</div>
@endsection
