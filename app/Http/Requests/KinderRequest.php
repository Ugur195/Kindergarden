<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KinderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'image'=>'required|mimes:png,jpg',
            'location'=>'required',
            'mobile'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'language_id'=>'required',
            'district_id'=>'required',
            'description'=>'required'
        ];
    }
}
