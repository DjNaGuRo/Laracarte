<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name' => 'required | min:3',
            'email' => 'required | email',
            'message' => 'required | min:10'
        ];
    }

    /**
     *  Customize errors message 
     * 
     *
     */
    public function messages()
    {
        return [
            'name.required' => 'The :attribute field is required and must be at least :min caracters',
            'name.min' => 'The :attribute field is required and must be at least :min caracters',
            'email.required' => 'The :attribute field is required and must be a valid email address',
            'email.email' => 'The :attribute field is required and must be a valid email address',
            'message.required' => 'The :attribute field is required and must be at least :min caracters',
            'message.min' => 'The :attribute field is required and must be at least :min caracters'
        ];
    }
}
