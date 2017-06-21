<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Game extends Model
{
    protected $table = "user_game";
    protected $fillable = [ 'id_user','id_game' ];
    public $timestamps = false;
}
