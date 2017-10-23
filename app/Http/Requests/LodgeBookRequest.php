<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LodgeBookRequest extends FormRequest
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
            //
            'fullName' => 'required|min:10|max:50',
            'age' => 'numeric|required|min:18',
            'email'=> 'required|email|unique:lodging_details',
            'gender' => 'required',
            'status' => 'required',
            'expiryDate' => 'required|min:1|max:10|numeric'
        ];
    }
}
