@extends('layouts.template')

@section('title', 'Liste des runs')

@section('content')

<h1>Liste des dernières runs</h1>

<ul>
    @foreach($runs as $run)
        <li><a href="/runs/{{ $run->id}}">{{ $run->name}}</a></li>
    @endforeach
</ul>
@endsection