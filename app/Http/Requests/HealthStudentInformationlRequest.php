<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HealthStudentInformationlRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'student_id'            => 'required',
            'gol_darah'             => 'required|string|max:50',                 
            'riwayat_penyakit'      => 'required|string|max:255',                 
            'kelainan_penyakit'     => 'required|string|max:255',                 
            'tinggi_badan'          => 'required|string|max:50',                 
            'berat_badan'           => 'required|string|max:50',                 
        ];
    }
}
