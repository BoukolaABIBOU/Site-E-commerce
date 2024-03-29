<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'title' => 'required|alpha_spaces',
            'category' => 'required|numeric',
            'description' => 'required|basic_characters',
            'price' => 'required',
            'weight' => 'required',
            'image' => 'required_without:upload|url',
            'upload' => 'required_without:image|image',
            'thumbnail' => 'url'
        ];
    }
}
