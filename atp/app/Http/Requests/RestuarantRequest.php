<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestuarantRequest extends FormRequest
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
            'rname.required' => ':attribute testing message',
            'rname.unique' => ':attribute testing message2'
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

            "rname"     => "required | unique:restuarant,rname",
            "location"  => "required",
            "area"  => "required",
            "goals"      => "required"
            //
        ];
    }
}
