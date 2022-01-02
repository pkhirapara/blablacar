<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'     => 'required',
            'mobile'   => 'required',
            'email'    => 'required|email',
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
            'name.required'     => 'Please put your name here',
            'email.required'    => 'Please put your email here',
            'email.email'       => 'Please put valid format for email',
            'mobile.required'   => 'Please put your phone number here',
            'password.required' => 'Please put your current password here',
        ];
    }
}
