@extends('layouts.template')

@section('title', 'Liste des jeux')

@section('content')

<h1>Runs pour {{ $game->name}}</h1>
<img src="{{ $game->img}}" />
<p>{{ $game->desc }}</p>


@endsection