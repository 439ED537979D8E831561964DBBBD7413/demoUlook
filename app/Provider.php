<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Provider extends Authenticatable
{

    use Notifiable, HasApiTokens;

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

    public function devices()
    {
        return $this->hasMany(ProviderDevices::class);
    }

    public function service()
    {
        return $this->hasOne(ProviderService::class);
    }


}
