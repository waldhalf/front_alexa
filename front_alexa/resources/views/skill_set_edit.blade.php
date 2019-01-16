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
            <label for="skill_name">Nom du skill</label>
            <input type="text" name="skill_name" class="form-control" value="{{$skill->skill_set_name}}">

            <button class="button_form" type="submit">Update le nom du skill</button>
            <!-- <a class="button_form btn btn btn-light" href="{{url('/skills/'.$skill->id.'/edit')}}">Update le contenu du skill</a> -->
        </form>
    </div>
</div>
@endsection
