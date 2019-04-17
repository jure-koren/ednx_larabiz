<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //

    // many:1 user (Belongs to)
    public function user() {
        return $this->belongsTo('App\User');
    }
}
