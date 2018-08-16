<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest {
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
			'site_name' => 'required|max:15',
			'site_logo' => 'mimes:jpeg,png,jpg|max:5242880',
			'site_icon' => 'mimes:jpeg,png,jpg|max:5242880',
		];
	}
}
