<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentClassRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'kode'          => 'required',
            'nama'          => 'required|string|max:50',                 
            'deskripsi'     => 'required|string|max:255',                    
        ];
    }
}
