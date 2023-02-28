<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutusStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' =>'nullable',
            'des' =>'nullable',
            'sub_title_one' =>'nullable',
            'sub_title_one_des' =>'nullable',
            'sub_title_two' =>'nullable',
            'sub_title_two_des' =>'nullable',
            'sub_title_three' =>'nullable',
            'sub_title_three_des' =>'nullable',
        ];
    }
}
