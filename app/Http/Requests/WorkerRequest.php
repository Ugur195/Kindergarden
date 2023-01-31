<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'mimes:png,jpg',
            'surname' => 'required',
            'fatherName' => 'required',
            'phone1' => 'required',
            'phone2' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'education' => 'required',
            'experience' => 'required',
            'about' => 'required',
            'workDays' => 'required',
            'position' => 'required',
        ];
    }
}
