<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'student.name' => 'required',
            'student.school' => 'required',
            'student.grade' => 'required',
            'student.firstchoice' => 'required',
        ];
    }
    
    public function attributes()
    {
        return [
            'student.name' => '名前',
            'student.school' => '学校',
            'student.grade' => '学年',
            'student.firstchoice' => '志望校',
        ];
    }
}
