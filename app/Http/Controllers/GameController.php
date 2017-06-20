<?php

namespace App\Http\Controllers;

use App\Game;
use App\Card;
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

    public function newgame()
    {
        return view('Game.newgame');
    }
    public function store(Request $request){
        $game = $request -> all();
        Game::create($game);

        return redirect() -> action('GameController@index');
    }

    public function selectcard($id)
    {
        $cards = Card::all();
        $game = Game::find($id);
        return view('Game.selectcard',['cards' => $cards, 'game' => $game]);
        //return $carddata;
    }

    public function start()
    {
        
    }
}
