<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyRequest extends FormRequest
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
            'name'=>'required',
            'city'=>'required',
            'field'=>'required',
            'qualification'=>'required',
            'work_graphic'=>'required',
            'experience'=>'required',
            'education'=>'required',
            'salary'=>'required',
            'requirement'=>'required',
            'note'=>'required',
            'about'=>'required'
        ];
    }
}
