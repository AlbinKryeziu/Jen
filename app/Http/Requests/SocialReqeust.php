<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SocialReqeust extends FormRequest
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
            'facebook'=>'required_without:website',
            'instagram'=>'required_without:website',
            'website'=>'required_without:facebook|',
            'other'=>'required_without:website',
        ];
    }
}
