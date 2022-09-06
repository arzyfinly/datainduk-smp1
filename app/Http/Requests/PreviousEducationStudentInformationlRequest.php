<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PreviousEducationStudentInformationlRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'student_id'            => 'required',
            'asal_sekolah'          => 'required|string|max:255',                 
            'tanggal_skhun'         => 'required','date',                 
            'no_skhun'              => 'required|string|max:50',                 
            'tanggal_ijazah'        => 'required','date',                 
            'no_ijazah'             => 'required|string|max:50',                 
            'pindahan_dari_sekolah' => 'required|string|max:255',                 
            'diterima_dikelas'      => 'required|string|max:50',                 
            'kelompok'              => 'required|string|max:50',                 
            'tangal_penerimaan'     => 'required','date',                 
            
        ];
    }
}
