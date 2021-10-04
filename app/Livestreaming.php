<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livestreaming extends Model
{
    protected $fillable = [
        'date','entitle','maltitle','url','users_id'	
    ];
}
