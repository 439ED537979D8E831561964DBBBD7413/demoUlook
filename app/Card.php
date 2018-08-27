<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    public function user()
    {
        return $this->hasOne(User::class);
    }

    //
    public function provider()
    {
        return $this->hasOne(Provider::class);
    }

}
