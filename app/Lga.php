<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    protected $table = "lga";
    protected $fillable = ['state_id', 'name'];
}
