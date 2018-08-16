<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable {
	use HasApiTokens, Notifiable;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'email',
		'password',
		'first_name',
		'last_name',
		'social_unique_id',
		'device_type',
		'device_token',
		'device_id',
		'login_by',
		'email',
		'password',
		'mobile',
		'payment_mode'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	public function locations() {
		return $this->hasMany( FavouriteLocation::class );
	}

}
