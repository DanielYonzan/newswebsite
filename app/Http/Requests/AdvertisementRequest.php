<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementRequest extends FormRequest
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
            'title'=>'required|min:6',
            'link'=>'required|url|',
            'rank'=>'required|integer|min:1|max:80'
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Title required!!!',
            'link.required'=>'Enter url!!!',
            'rank.required'=>'Rank required!!!',
            'rank.min'=>'Minimum rank should be 1',
            'rank.max'=>'Maximum rank should be 80'
        ];
    }
}
