@extends('layouts.template')

@section('title', 'Creer une race')

@section('content')

<h1>Formulaire de création de race</h1> 

<section class="page-section">
    <div class="container">
    
        <form class="submitform" method="post" action="/createrun">
            @csrf
            <div class="row"> 

                <div class="col-md-6">
                    <label for="run_name">Nom de la race :</label>
                    <input type="text" id="run_name" name="run_name" required >
                </div>

                <div class="col-md-6">
                    <label for="player1">Joueur 1 :</label>
                    <input type="text" id="player1" name="player1" required >
                </div>

                <div class="col-md-6">
                    <label for="player2">Joueur 2 :</label>
                    <input type="text" id="player2" name="player2" required >
                </div>

                <div class="col-md-6">
                    <label for="deadline">Deadline</label>
                    <input type="datetime-local" id="deadline"
                    name="deadline" value="2018-06-12T19:30"
                    min="2018-06-07T00:00" max="2030-06-14T00:00">
                </div>

               <!-- <div class="col-md-6">
                    <label for="game-select">Séléctionnez le jeu :</label>
                    <select name="name" id="game-select">
                        @foreach($games as $game)
                        <option value="{{ $game->name }}">{{ $game->name }}</option>
                        @endforeach
                    </select>
                </div> -->

            </div>
            <div class="text-center">
                <button class="site-btn">Envoyer</button>
            </div>
        </form>
    </div>
</section>


@endsection