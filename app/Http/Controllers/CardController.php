<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //pubf
    public function index()
    {
        $cards = Card::paginate(9);
        return view('Card.index',['cards' => $cards]);
        //return $cards;
    }

    public function create()
    {
        return view('Card.create');
    }

    public function store(Request $request)
    {
        /*$card = new Card();
        $card -> name = $request -> name;
        $card -> effect = $request -> effect;
        $card -> image = $request -> image;
        $card -> point = $request -> point;
        $card -> save();*/

        $card = $request -> all();
        Card::create($card);

        return redirect() -> action('CardController@index');
    }

    public function hometo()
    {
        return view('home');
    }

    public function edit($id)
    {
        $card = Card::find($id);
        return view('Card.edit', ['card' => $card]);
    }

    public function update(Request $request, $id)
    {
        $cardNew = $request -> all();
        $card = Card::find($id);
        $card -> name = $request -> name;
        $card -> effect = $request -> effect;
        $card -> image = $request -> image;
        $card -> point = $request -> point;
        $card -> save();
        return redirect() -> action('CardController@index');
    }

    public function destroy($id)
    {
        $card = Card::find($id);
        $card -> delete();
        return redirect() -> action('CardController@index');
    }
}
