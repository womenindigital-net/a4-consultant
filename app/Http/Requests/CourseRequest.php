<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'courseCategoryId' => 'nullable',
            'CourseName' => 'nullable',
            'courseTitle' => 'nullable',
            'courseDescription' => 'nullable',
            'price' => 'nullable',
            'startDate' => 'nullable',
            'time' => 'nullable',
            'duration' => 'nullable',
            'InstructorId' => 'nullable',
            'coursesImage' => 'nullable',
            'status' => 'nullable',
            'courseCategory' => 'nullable',
        ];
    }
}