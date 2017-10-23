<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomCreateRequest extends FormRequest
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
            'name' => 'required|min:5|max:25',
            'description' => 'required|min:10|max:100',
            'price' => 'required|numeric|min:150|max:700',
            'image' => 'required|file|image',
            'roomType' => 'required'
        ];
    }
}
