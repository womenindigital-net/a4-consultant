<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsAndEventsStoreRequest extends FormRequest
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
            'image' => 'required',
            'title' => 'required',
            'description' => 'nullable',
            'date' => 'required',
            'time' => 'nullable',
            'finishTime' => 'nullable',
            'address' => 'required',
            'status' => 'required',
        ];
    }
}
