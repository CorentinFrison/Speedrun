<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Run;
use App\Category;
use App\User;

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

    public function create(){
        $gamelist = Game::all();
        $categories = Category::all();
        $users = User::all();
        return view("firstcontroller.create", ["games" => $gamelist, "categories" => $categories, "users" => $users]);
    }
    
    public function store(Request $request){
        $run = new Run();

        $run->name = $request->input("run_name");
        $p1 = $request->input("player1");
        $p2 = $request->input("player2");
        $run->p1_id = User::where("username","=",$p1)->firstOrFail()->id;
        $run->p2_id = User::where("username","=",$p2)->firstOrFail()->id;

        $run->save();
    }
    
}

