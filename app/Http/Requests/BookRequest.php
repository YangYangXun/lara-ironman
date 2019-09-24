<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            // 書名必填且為字串
            'name' => 'string',
            // 作者必填且為字串
            'author' => 'string',
            // 價錢必填且為數字
            'price' => 'numeric',
            // 出版日期必填且為日期
            'publication_date' => 'date'
        ];
    }


    // function validated(Validator $validator)
    // {
    //     $messages = $validator->errors()->messages();
    //     $response = [];

    //     foreach ($messages as $_messages) {
    //         array_push($response, $_messages[0]);
    //     }

    //     throw new HttpResponseException(response()->json($response[0], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    // }
}
