<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required',
            'body' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'image' => 'required|array|size:2',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif'
        ];
    }
}
