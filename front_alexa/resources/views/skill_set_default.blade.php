@extends('layouts.my_layout')

@if (Session::has('msg'))
    <p class="alert alert-success" role="alert">{{ Session::get('msg') }}</p> 
@endif

@section('content')
<div class="row">
    <div class="col-sm-6 offset-sm-3">
        <h1 class="h1_form">Définir speech par défaut</h1>
        <hr>

        <form action="#" method="POST">
            @csrf
            <label for="client_name">Nom de la skill</label>
            <input type="text" name="client_name" class="form-control" value="{{$skill->skill_set_name}}" disabled>

            <!-- <input type="text" for="skill_set_id" hidden value="{{$skill->id}}"> -->

            <label for="skill_set_id">Liste des speeches disponible</label>
            <select name="skill_set_id" class="form-control">
                @foreach ($speeches as $speech)
                    <option value="{{ $speech->id }}">{{$speech->client_name}} - {{ $speech->skill_content_01 }}</option>
                @endforeach
            </select>
            <hr>
            <button class="button_form" type="submit">Définir speech par défaut</button>
            <!-- <a class="button_form btn btn btn-light" href="{{url('/skills/'.$skill->id.'/edit')}}">Update le contenu du skill</a> -->
        </form>
    </div>
</div>
@endsection