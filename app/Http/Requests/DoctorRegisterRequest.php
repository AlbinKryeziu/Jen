<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRegisterRequest extends FormRequest
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
            'company_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'speciality' => 'required',
            'zip_code' => 'required||postal_code:Us',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        ];
    }

    public function messages()
    {
        return[
            'zip_code.postal_code' =>'The :attribute field must be a valid postal code.',
        ];
    }
}
