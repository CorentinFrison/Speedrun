@extends('layouts.template')

@section('title', 'Liste des jeux')

@section('content')

<h1>Liste des jeux</h1>

<ul>
    @foreach($games as $id => $name)
        <li>{{ $name }}</li>
    @endforeach
</ul>

@endsection