<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CalculatorRequest extends FormRequest
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
            "numbers.numberOne" => 'required|numeric',
            "numbers.numberTwo" => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'numbers.numberOne.required' => 'The first field is required',
            'numbers.numberTwo.required' => 'The second field is required',
            'numbers.numberOne.numeric' => 'The first field must be a number',
            'numbers.numberTwo.numeric' => 'The second field must be a number'
        ];
    }
}
