@extends('layouts.template')

@section('title', 'Liste des jeux')

@section('content')

<h1>Runs pour {{ $run->name}}</h1> 
<div>
    <h2>Vod p1</h2>
    <iframe
    src="https://player.twitch.tv/?video={{$run->p1_vod}}&autoplay=false"
    height="720"
    width="1280"
    frameborder="0"
    scrolling="no"
    allowfullscreen="true">
    </iframe>
</div>

<div>
    <h2>Vod p2</h2>
    <iframe
    src="https://player.twitch.tv/?video={{$run->p2_vod}}&autoplay=false"
    height="720"
    width="1280"
    frameborder="0"
    scrolling="no"
    allowfullscreen="true">
    </iframe>
</div>

@endsection