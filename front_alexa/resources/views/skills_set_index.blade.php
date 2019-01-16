@extends('layouts.my_layout')

@if (Session::has('msg'))
    <p class="alert alert-success" role="alert">{{ Session::get('msg') }}</p> 
@endif

@section('content')
    <div class="container col-md-8">
        <div class="row">
            <div class="col-md-4">
                <h2 class="mt-3 mb-3 h2_index_skill">Liste des skills</h2>
            </div>
        </div>
        <table class="table table-striped table-dark" id="table_id">
            <thead>
                <tr>     
                    <th scope="col" width="50px">Id</th>
                    <th scope="col">Nom du skill</th>
                    <th scope="col" width="20px" class="text-right">Def.speech</th>
                    <th scope="col" width="20px" class="text-right">Edit</th>
                    <th scope="col" width="20px" class="text-right">Suppr</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills_set as $skill)
                <tr>               
                    <td>{{$skill->id }}</td>
                    <td>{{$skill->skill_set_name}}</td>
                    <td class="text-right"><a href="{{url('/skills_set/'. $skill->id .'/default')}}"><img src="{{url('../svg/badge-8x.png')}}" alt="icon-def"></a></td> 
                    <td class="text-right"><a href="{{url('/skills_set/'. $skill->id .'/edit')}}"><img src="{{url('../svg/pencil-8x.png')}}" alt="icon-edit"></a></td>
                    <td class="text-right"><a href="{{url('/skills_set/'. $skill->id .'/delete')}}"><img src="{{url('../svg/delete-8x.png')}}" alt="icon-suppr"></a></td>  
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection
