<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class FirstController extends Controller
{
    public function index(){
        return view("firstcontroller.index");
    }

    public function gamelist(){

        $gamelist = Game::all();
        return view("firstcontroller.games", ["games" => $gamelist]);
    }

    public function game($id){
        return view("firstcontroller.games", ['id' => $id]);
    }

    public function runs(){
        return view("firstcontroller.runs");
    }
}

