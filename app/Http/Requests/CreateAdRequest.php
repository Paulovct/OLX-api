<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateAdRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "title" => "required|min:4|string",
            "price" => "required",
            "description" => "string",
            "negotiable" => "boolean",
            "state_id" => "required|exists:states,id",
            "category_id" => "required|exists:categories,id"
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
