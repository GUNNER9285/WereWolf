<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //pubf
    public function index()
    {
        $cards = Card::all();
        return $cards;
    }
}
