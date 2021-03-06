<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'starting_point'    => 'required',
            'destination_point' => 'required',
            'time'              => 'required|email',
            'is_booked'         => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'starting_point.required'    => 'Please put your Starting Point here',
            'destination_point.required' => 'Please put your Destination here',
            'time.email'                 => 'Please put valid time'
        ];
    }
}
