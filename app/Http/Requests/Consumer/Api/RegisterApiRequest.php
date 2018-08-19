<?php

namespace App\Http\Requests\Consumer\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterApiRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'social_unique_id' => [ 'required_if:login_by,facebook,google', 'unique:users' ],
			'device_type'      => 'required|in:android,ios',
			'device_token'     => 'required',
			'device_id'        => 'required',
			'login_by'         => 'required|in:manual,facebook,google',
			'email'            => 'required|email|max:255|unique:users',
			'password'         => 'required|min:6',
		];
	}
}
