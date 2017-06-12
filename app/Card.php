<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "card";
    protected $fillable = [ 'name','effect','image','point' ];
    public $timestamps = true;
}
