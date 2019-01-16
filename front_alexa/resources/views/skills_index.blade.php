@extends('layouts.my_layout')

@if (Session::has('msg'))
    <p class="alert alert-success" role="alert">{{ Session::get('msg') }}</p> 
@endif

@section('content')
    <div class="container col-md-8">
        <div class="row">
            <div class="col-md-4">
                <h2 class="mt-3 mb-3 h2_index_skill">Liste des speech</h2>
            </div>
        </div>
        <table class="table table-striped table-dark" id="table_id">
            <thead>
                <tr>     
                    <th scope="col" width="20px">Nom du client</th>
                    <th scope="col">Skill_content_01</th>
                    <th scope="col">Skill affiliée</th>
                    <th scope="col" width="20px" class="text-right">Edit</th>
                    <th scope="col" width="20px" class="text-right">Suppr</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                <tr>               
                    <td>{{$skill->client_name }}</td>
                    <td>{{$skill->skill_content_01}}</td>
                    <td>{{$skill->skill_set_name}} </td>
                    <td class="text-right"><a href="{{url('/skills/'. $skill->id .'/edit')}}"><img src="{{url('../svg/pencil-8x.png')}}" alt="icon-edit"></a></td>
                    <td class="text-right"><a href="{{url('/skills/'. $skill->id .'/delete')}}"><img src="{{url('../svg/delete-8x.png')}}" alt="icon-suppr"></a></td>  
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection
