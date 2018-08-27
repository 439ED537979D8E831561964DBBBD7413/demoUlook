<?php

namespace App\Http\Requests\Consumer\Api;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed schedule_date
 * @property mixed schedule_time
 * @property mixed s_latitude
 * @property mixed s_longitude
 * @property mixed service_type_id
 * @property mixed d_latitude
 * @property mixed d_longitude
 */
class StoreTripRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service_type_id' => 'required',
            's_address' => 'required',
            's_latitude' => 'required',
            's_longitude' => 'required',
            'd_address' => 'required',
            'd_latitude' => 'required',
            'd_longitude' => 'required',
            'distance' => 'required|numeric',
            'use_wallet' => 'numeric',
            'payment_mode' => 'required|in:CASH,CARD,PAYPAL',
        ];
    }
}
