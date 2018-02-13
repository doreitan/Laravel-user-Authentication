<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
use App\post;

class post extends Model
{
    public function user(){
        return $this->belongsTo('App\user');



    }
}
