<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class DetailStudentHobbieRequest extends FormRequest
{    
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'student_hobbie_id'     => 'required',
            'nama'                  => 'required|string|max:50',                 
            
            
        ];
    }
}
