<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StudentRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }



    public function rules()
    {
        return [
            'nisn'          => 'required|min:3|max:30',
            'class_id'      => 'required',                    
        ];
    }
}
