<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;


class UpdateAdRequest extends FormRequest
{
   public function rules(): array
    {
        return [
            "title" => "min:4|string",
            "price" => "",
            "description" => "string",
            "negotiable" => "boolean",
            "state_id" => "exists:states,id",
            "category_id" => "exists:categories,id"
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
