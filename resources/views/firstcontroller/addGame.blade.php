@extends('layouts.template')

@section('title', 'Ajouter un jeu')

@section('content')


<h1>Formulaire d'ajout de jeu</h1> 

<section class="page-section">
    <div class="container">
    
        <form class="submitform" method="post" action="/storegame" enctype="multipart/form-data">
            @csrf
            <div class="row"> 

                <div class="col-md-6">
                    <label for="game_name">Nom du jeu :</label>
                    <input type="text" id="game_name" name="game_name" required >
                </div>

                <div class="col-md-12">
                    <label for="desc">Description :</label>
                    <textarea id="desc" name="desc" placeholder="Écrivez la description ici" rows="5" cols="40" required ></textarea>
                </div>

                <div class="col-md-6">
                    <label for="img">Image :</label>
                    <input type="file" id="img" name="img" required >
                </div>

            </div>
            <div class="text-center">
                <button class="site-btn">Envoyer</button>
            </div>
        </form>
    </div>
</section>


@endsection