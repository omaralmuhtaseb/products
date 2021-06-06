<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
                    'name' => 'required'
                    ];


            case 'PUT':
                return [
                    'name' => 'required'
                ];

        }
    }

    public function messages()
    {
        switch($this->method()){
            case 'POST':
                return [
                    'name.required' => 'Category Name Is Mandatory !'
                ];


            case 'PUT':
                return [
                    'name.required'=> 'Category Name Cannot Be Empty !'
                ];

        }
    }
}
