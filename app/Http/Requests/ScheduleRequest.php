<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            'day[]' => 'required',
            'start[]' => 'required',
            'end[]' => 'required',
        ];
    }
    public function messages()
    {
        return [
        'day[].required' =>'The day field is required.',
        'start[].required' =>'The start field is required.',
        'end[].required' =>'The end field is required.',
        ];
    }
}
