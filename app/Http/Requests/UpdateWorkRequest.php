<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkRequest extends FormRequest
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
            'services_1' =>'required',
            'services_2' =>'required',
            'services_3' =>'required',
            'price_1' =>'required|numeric',
            'price_2' =>'required|numeric',
            'price_3' =>'required|numeric',
            
        ];
    }
}
