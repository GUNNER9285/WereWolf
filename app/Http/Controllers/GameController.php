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
        if(isset(Auth::user()->id) == null){
            return 'Please Login';
        }
        $cards = Card::all();
        $game = Game::find($id);
        file_put_contents(public_path().'/player.txt', "");
        return view('Game.selectcard',['cards' => $cards, 'game' => $game]);
        //return $carddata;
    }

    public function start(Request $request)
    {
        $game_id = $request->get('game_id');
        $game = Game::find($game_id);
        $path = fopen(public_path().'/player.txt','a+');
        for($i=0; $i<$game->player; ++$i){
            $card_data = $request->get('card'.$i);
            $card_game = [
                'id_card'=>$card_data ,
                'id_game'=>$game_id
            ];
            Card_Game::create($card_game);
            $id = $card_data;
            fwrite($path,$id." ");
        }
        return redirect() -> action('GameController@index');
    }

    public function join($id)
    {
        if(isset(Auth::user()->id) == null){
            return 'Please Login';
        }
        $user_game = [
            'id_user'=> Auth::user()->id ,
            'id_game'=>$id
        ];
        User_Game::firstOrCreate($user_game);
        //$card = Card::find(5);
        $game = Game::find($id);

        $path = public_path().'/player.txt';

        $read = fopen($path, 'a+');
        $file = fgets($read,4096);
        //print_r (explode(" ",$file));

        $list = explode(" ",$file);
        $id_card = 0;

        while(true){
            $rand = rand(0,sizeof($list)-1);
            if($list[$rand] != 0){
                $id_card = $list[$rand];
                $list[$rand] = 0;
                break;
            }
        }

        file_put_contents($path, "");

        for($i=0; $i<sizeof($list); ++$i){
            if($list[$i] != 0){
                fwrite($read, $list[$i]." ");
            }
        }
        $card = Card::find($id_card);
        return view('Game.showcard',['card' => $card]);


        //return $game->cards$file[$rand];
        //return $game->cards;
        //return view('Game.showcard',['card' => $card]);
    }


}
