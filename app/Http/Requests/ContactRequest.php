<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required|min:5|max:30',
            'message'=>'required|min:5|max:300'
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'Your name'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Ձեր անունը պարտադիր է',
            'email.required' =>'Ձեր Էլ փոստը պարտադիր է',
        ];
    }
}
