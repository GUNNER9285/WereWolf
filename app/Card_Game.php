<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card_Game extends Model
{
    protected $table = "card_game";
    protected $fillable = [ 'id_card','id_game' ];
    public $timestamps = false;
}
