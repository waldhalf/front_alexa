@extends('layouts.my_layout')

@if (Session::has('msg'))
    <p class="alert alert-success" role="alert">{{ Session::get('msg') }}</p> 
@endif

@section('content')
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <h1 class="h1_form">Formulaire d'édition de skill</h1>
        <hr>

        <form action="#" method="POST">
            @csrf
            <label for="client_name">Nom du client</label>
            <input type="text" name="client_name" class="form-control" value="{{$skill->client_name}}">

            <label for="skill_content_01">Texte du premier intent</label>
            <textarea cols="30" rows="10" name="skill_content_01" class="form-control">{{$skill->skill_content_01}}</textarea>

            <label for="skill_set_name">Nom de la skill</label>
            <select name="skill_set_name" class="form-control">
                @foreach ($skill_set as $skill)
                    <option value="{{ $skill->id }}">{{ $skill->skill_set_name }}</option>
                @endforeach
            </select>
            <hr>
            <button class="button_form" type="submit">Update le contenu du skill</button>
            <!-- <a class="button_form btn btn btn-light" href="{{url('/skills/'.$skill->id.'/edit')}}">Update le contenu du skill</a> -->
        </form>
    </div>
</div>
@endsection
