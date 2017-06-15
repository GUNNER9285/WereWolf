<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "card";
    protected $fillable = [ 'name','effect','image','point' ];
    public $timestamps = true;

    public function games()
    {
        return $this->belongsToMany('App\Game','card_game', 'id_card','id_game');
    }
}
