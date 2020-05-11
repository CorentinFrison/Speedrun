@extends('layouts.template')

@section('title', 'Liste des jeux')

@section('content')

<h1>Runs pour {{ $game->name}}</h1>
<img src="{{ $game->img}}" />
<p>{{ $game->desc }}</p>


@foreach($runlist as $run)
    <div>
        <h2><a href="http://localhost:8000/runs/{{$run->id}}">{{$run->name}}</a></h2>
        <p>Catégorie : {{$run->categorie}}</p>
        <p>Joueur 1 : {{$run->player1}}</p>
        <a href="{{$run->p1_vod}}"> Vod du joueur 1 </a>
        <p>Time du joueur 1 : {{$run->p1_time}}</p>
        <p>Joueur 2 : {{$run->player2}}</p>
        <a href="{{$run->p2_vod}}"> Vod du joueur 2 </a>
        <p>Time du joueur 2 : {{$run->p2_time}}</p>
        <p>Deadline : {{$run->deadline}}</p>     
    </div>
@endforeach
    
        
    





@endsection