@extends('layouts.template')

@section('title', 'Liste des jeux')

@section('content')

<h1>Liste des jeux</h1>



<ul>
    @foreach($games as $game)
        <a href="/games/{{ $game->id}}"><img src="{{ $game->img}}" /></a>
        <li>{{ $game->name }}</li>
    @endforeach
</ul>

@endsection