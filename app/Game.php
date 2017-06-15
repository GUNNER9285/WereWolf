<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = "game";
    protected $fillable = [ 'name','player' ];
    public $timestamps = true;

    public function cards()
    {
        return $this->belongsToMany('App\Card','card_game','id_game','id_card');
    }
}
