<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class GuardianStudentInformationlRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'student_id'            => 'required',
            'nama'                  => 'required|string|max:50',                 
            'tempat_lahir'          => 'required|string|max:50',                 
            'tanggal_lahir'         => 'required','date',                 
            'agama'                 => 'required|string|max:20',                             
            'kewarganegaraan'       => 'required|string|max:50',                 
            'ijazah_tertinggi'      => 'required|string|max:50',                 
            'pekerjaan'             => 'required|string|max:100',                 
            'alamat_rumah'          => 'required|string|max:255',                 
            'no_hp'                 => 'required|string|max:20',                
            
        ];
    }
}
