<?php

namespace App\Http\Controllers;

use App\Game;
use App\Card;
use App\Card_Game;
use App\User_Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function guide()
    {
        return view('Game.guide');
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

    public function start(Request $request)
    {
        $game_id = $request->get('game_id');
        $game = Game::find($game_id);
        for($i=0; $i<$game->player; ++$i){
            $card_data = $request->get('card'.$i);

            $card_game = [
                'id_card'=>$card_data ,
                'id_game'=>$game_id
            ];
            Card_Game::create($card_game);
        }
        $file = fopen(public_path().'/player.txt','r+');
        $rand = rand(0,4);
        fwrite($file,$rand);
        return 'Finish';
    }

    public function join($id)
    {
        $user_game = [
            'id_user'=> Auth::user()->id ,
            'id_game'=>$id
        ];
        User_Game::firstOrCreate($user_game);
        //$card = Card::find(5);
        $game = Game::find($id);
        $file = fopen(public_path().'/player.txt','a+');
        $rand = rand(0,4);
        fwrite($file,$rand);
        //return $game->cards[$rand];
        //return $game->cards;
        //return view('Game.showcard',['card' => $card]);
    }
}
