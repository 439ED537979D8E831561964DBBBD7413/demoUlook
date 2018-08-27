<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Provider extends Model
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
