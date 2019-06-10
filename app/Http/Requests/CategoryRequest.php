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
        return [
            'name'=>'required|min:5|max:32',
            'rank'=>'required|integer|min:1|max:80',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Enter Name!!!',
            'rank.required'=>'Enter Rank!!!',
            'rank.min'=>'Minimum rank should be 1',
            'rank.max'=>'Maximum rank should be 80'

        ];
    }
}
