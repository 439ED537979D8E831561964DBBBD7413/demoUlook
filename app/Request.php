<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

    public function user()
    {
        $this->hasOne(User::class);
    }

    public function provider()
    {
        $this->hasOne(Provider::class);
    }

    public function currentProvider()
    {
        $this->hasOne(Provider::class);
    }

    //
    public function scopePendingRequest($query, $user_id)
    {
        return $query->where('user_id', $user_id)
            ->whereNotIn('status', ['CANCELLED', 'COMPLETED', 'SCHEDULED']);
    }
}
