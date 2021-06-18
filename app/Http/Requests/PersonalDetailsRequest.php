<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalDetailsRequest extends FormRequest
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
            'national_ID' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'home_county' => 'required',
            'marital_status' => '',
            'phone' => 'required',
            'residence' => 'required',
            'personal_email' => 'required'
        ];
    }
}
