<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Run;

class FirstController extends Controller
{
    public function index(){
        return view("firstcontroller.index");
    }

    public function gamelist(){

        $gamelist = Game::all();
        return view("firstcontroller.games", ["games" => $gamelist]);
    }

    
    public function gameid($id){
        //return "<h2> Le jeu = $id";
        $game = Game::find($id);
        return view("firstcontroller.game", ['game' => $game]);
    }
    

    public function runlist(){
        $runlist = Run::all();
        return view("firstcontroller.runs",['runs' => $runlist]);
    }

    public function run($id){
        $run = Run::find($id);
        return view("firstcontroller.run", ['run' => $run]);
    }
    
    
}

