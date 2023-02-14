<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
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
            'instructorName' => 'nullable',
            'instructorTitle' => 'nullable',
            'instructorDescription' => 'nullable',
            'instructorPosition' => 'nullable',
            'instructorImage' => 'nullable',
            'status' => 'nullable',
        ];
    }
}
