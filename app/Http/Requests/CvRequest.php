<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvRequest extends FormRequest
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
            'image'=>'mimes:png,jpg',
            'name'=>'required|string|max:255',
            'surname'=>'required',
            'father_name'=>'required',
            'phone1'=>'required|string',
            'phone2'=>'required',
            'email'=>'email',
            'gender'=>'required|string|max:1',
            'age'=>'required:numeric',
            'education'=>'required|string',
            'experience'=>'required|string',
            'about'=>'required|string'
        ];
    }
}
