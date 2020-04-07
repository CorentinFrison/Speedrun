<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        return view("firstcontroller.index");
    }

    public function gamelist(){
        $games = ["1" => "game 1","2" => "game 2","3" => "game 3" ];
        return view("firstcontroller.games", ["games" => $games]);
    }

    public function game($id){
        return view("firstcontroller.games", ['id' => $id]);
    }

    public function runs(){
        return view("firstcontroller.runs");
    }
}

