<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'subject' => 'required|min:5|max:50',
            'email' => 'required|min:5|max:50',
            'name' => 'required|min:2|max:12',
            'message' => 'required|min:15|max:1000'
        ];
    }

//    public function attributes() {
//      return [
//          'name' => 'Номат'
//      ];
//    }

//    public function messages() {
//        return [
//            'name.required' => 'Номата навис лох'
//        ];
//    }
}
