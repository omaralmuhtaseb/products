<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        switch($this->method()){
            case 'POST':
                return [
                    'name' => 'required',
                    'category' => 'required|min:1',
                ];


            case 'PUT':
                return [
                    'name' => 'required',
                    'category' => 'required|min:1',
                ];

        }
    }

    public function messages()
    {
        switch($this->method()){
            case 'POST':
                return [
                    'name.required' => 'Product Name Is Mandatory !',
                    'category.required' => 'Product Category Is Mandatory !',
                ];


            case 'PUT':
                return [
                    'name.required'=> 'Product Name Cannot Be Empty !',
                    'category.required' => 'Product Category Is Mandatory !',
                ];

        }
    }
}
