<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResidenceStudentInformationlRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'student_id'            => 'required',
            'alamat'                => 'required|string|max:255',                 
            'no_hp'                 => 'required|string|max:20',                 
            'tinggal_dengan'        => 'required|string|max:50',                 
            'jarak_kesekolah'       => 'required|string|max:50',                 
            
        ];
    }
}
