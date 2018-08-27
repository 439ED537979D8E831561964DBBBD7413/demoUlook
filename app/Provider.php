<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Provider extends Authenticatable
{

    use HasApiTokens;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'mobile',
        'profile_image',
        'gender',
        'latitude',
        'longitude',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function service()
    {
        return $this->hasOne(ProviderService::class);
    }


}
