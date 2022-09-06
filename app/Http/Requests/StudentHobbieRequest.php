<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StudentHobbieRequest extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [
            'student_id'     => 'required',            
        ];
    }
}
