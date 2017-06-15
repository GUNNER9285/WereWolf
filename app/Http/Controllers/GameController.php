<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        /*
        foreach ($games as $game){
            $game->cards;
        }*/
        /*
        for($i=0; $i<sizeof($games); ++$i){
            $games[i]->cards;
        }
        */
        return view('Game.index',['games' => $games]);
    }
}
