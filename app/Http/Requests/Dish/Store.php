<?php

namespace App\Http\Requests\Dish;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest 
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
			'Code_ufm' => 'required|exists:ufm,Code_ufm|numeric',
			'Name_dish' => 'required|max:255',
			'Description' => 'required|max:255',
			'Calorie' => 'required|numeric',
			'Price' => 'required|numeric',
			'Code_tod' => 'required|exists:type_of_dish,Code_tod|numeric',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
     
        ];
    }

}
