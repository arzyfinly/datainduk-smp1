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
            'nisn'                      => 'required|string',
            'class_id'                     => 'required|string',
            "nama_lengkap"              => 'required|string',
            "nama_panggilan"            => 'required|string',
            "tempat_lahir"              => 'required|string',
            "tanggal_lahir"             => 'required',
            "jenis_kelamin"             => 'required|string',
            "agama"                     => 'required|string',
            "kewarganegaraan"           => 'required|string',
            "anak_ke"                   => 'required|string',
            "jumlah_saudara_kandung"    => 'required|string',
            "jumlah_saudara_tiri"       => 'required|string',
            "jumlah_saudara_angkat"     => 'required|string',
            "status_yatim"              => 'required|string',
            "bahasa_keseharian"         => 'required|string',
            "alamat"                    => 'required|string',
            "no_hp"                     => 'required|string',
            "tinggal_dengan"            => 'required',
            "jarak_kesekolah"           => 'required|string',
            "gol_darah"                 => 'required|string',
            "riwayat_penyakit"          => 'required|string',
            "kelainan_jasmani"          => 'required|string',
            "tinggi_badan"              => 'required|string',
            "berat_badan"               => 'required|string',
            "guardian_nama"             => 'required|string',
            "guardian_tempat_lahir"     => 'required',
            "guardian_tanggal_lahir"    => 'required',
            "guardian_agama"            => 'required|string',
            "guardian_kewarganegaraan"  => 'required|string',
            "guardian_hubungan_keluarga"=> 'required|string',
            "guardian_ijazah_tertinggi" => 'required|string',
            "guardian_pekerjaan"        => 'required|string',
            "guardian_penghasilan_perbulan"      => 'required|string',
            "guardian_alamat_rumah"           => 'required|string',
            "guardian_no_hp"            => 'required|string',
            "asal_sekolah"              => 'required|string',
            "tanggal_skhun"             => 'required',
            "no_skhun"                  => 'required|string',
            "tanggal_ijazah"            => 'required',
            "no_ijazah"                 => 'required|string',
            "pindahan_dari_sekolah"     => 'required|string',
            "diterima_dikelas"          => 'required|string',
            "kelompok"                  => 'required|string',
            "tanggal_penerimaan"        => 'required',
            "kesenian"                  => 'nullable|string',
            "kesehatan_jasmani"         => 'nullable|string',
            "keorganisasian"            => 'nullable|string',
            "lain_lain"                 => 'nullable|string',                    
        ];
    }
}
