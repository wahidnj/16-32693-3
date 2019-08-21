<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

     public function messages(){

        return [
            'uname.required' => ':attribute testing message',
            'uname.unique' => ':attribute testing message2'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "email"     => "required | unique:users,email",
            "uname"     => "required",
            "password"  => "required|min:3",
            "cpassword"  => "required|min:3",
            "address"      => "required",
            "contact"      => "required|min:11"
        ];
    }
}
