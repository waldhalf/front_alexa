@extends('layouts.my_layout')

@section('content')

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <h1 class="h1_form">Formulaire de création du skill</h1>
        <hr>

        <form action="#" method="POST">
            @csrf
            <label for="skill_name">Nom Skill</label>
            <input type="text" name="skill_name" class="form-control">

            <button class="button_form" type="submit">Créer le skill</button>
        </form>
    </div>
</div>
@endsection
