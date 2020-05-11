<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Run;
use App\Category;
use App\User;
use DB;

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
        $game = Game::find($id);
        $categories = Category::all();
        $users = User::all();
        $runs = Run::all();
        $runlist = DB::table('races')
                    -> join('categories', 'races.id', '=', 'categories.run_id')
                    -> join('games', 'categories.game_id', '=', 'games.id')
                    -> join('users as player1', 'player1.id', '=', 'races.p1_id')
                    -> join('users as player2', 'player2.id', '=', 'races.p2_id')
                    -> where('games.id', '=', $id)
                    -> select('races.id','races.name', 'player1.username as player1','races.p1_vod', 'player2.username as player2','races.p2_vod','races.p1_time','races.p2_time','races.deadline','categories.name as categorie')
                    -> get();
        //dd($runlist);
        return view("firstcontroller.game", ["game" => $game, "runlist" => $runlist]);
    }
    

    public function runlist(){
        $runlist = Run::all();
        return view("firstcontroller.runs",['runs' => $runlist]);
    }

    public function run($id){
        $run = Run::find($id);
        return view("firstcontroller.run", ['run' => $run]);
    }

    public function addGame(){
        return view("firstcontroller.addGame");
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
        $run->p1 = $request->input("player1");
        $run->p2 = $request->input("player2");
        $run->p1_id = User::where("username","=",$p1)->firstOrFail()->id;
        $run->p2_id = User::where("username","=",$p2)->firstOrFail()->id;
        $run->deadline = $request->input("deadline");

        $run->save();
    }

    public function storeGame(Request $request){
        $imgname = $request->file('img')->hashName();
        $request->file('img')->move("uploads/", $imgname);
        $game = new Game();
        $game->name = $request->input("game_name");
        $game->desc = $request->input("desc");
        $game->img = "/uploads/".$imgname;
        $game->save();
        return redirect("/");
    }

    
}

