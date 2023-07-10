<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SigninRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            "email" => "required|email|max:255",
            "password" => "required|min:3|max:255"
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json(
                [
                    "error" => array_values($validator->errors()->getMessages())[0][0],
                ]
            )
        );
    }
}
