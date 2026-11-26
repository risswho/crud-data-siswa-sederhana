<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class createSiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nomor_induk' => ['required', 'integer', 'unique:siswas,nomor_induk'],
            'nama_lengkap' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'in:Laki Laki,Perempuan'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'alamat' => ['required', 'string'],
            'nomor_telepon' => ['required', 'string', 'unique:siswas,nomor_telepon', 'max:15'],
            'email' => ['required', 'email', 'unique:siswas,email'],
        ];
    }
    #[Override]
    public function messages(): array
    {
        return [
            'nomor_induk.required' => 'nomor induk tidak boleh kosong',
            'nomor_induk.integer' => 'nomor induk harus bertipe angka',
            'nomor_induk.unique' => 'nomor induk sudah ada',

            'nama_lengkap.required' => 'nama lengkap tidak boleh kosong',
            'nama_lengkap.string' => 'nama lengkap tidak sesuai dengan tipe',
            
            'jenis_kelamin.required' => 'jenis kelamin harus diisi',
            'jenis_kelamin.in' => 'pilih jenis kelamin',

            'tempat_lahir.required' => 'tempat lahir tidak boleh kosong',
            'tempat_lahir.string' => 'tempat lahir tidak sesuai dengan tipe',

            'tanggal_lahir.required' => 'tanggal lahir tidak boleh kosong',
            'tempat_lahir.date' => 'silahkan isi tanggal lahir anda',

            'alamat.required' => 'alamat tidak boleh kosong',
            'alamat.string' => 'alamat tidak sesuai dengan tipe',
            
            'nomor_telepon.required' => 'nomor telepon tidak boleh kosong',
            'nomor_telepon.string' => 'nomor telepon tidak sesuai dengan tipe',
            'nomor_telepon.unique' => 'nomor telepon sudah terdaftar',
            'nomor_telepon.max' => 'nomor telepon melebihi batas maksimal',

            'email.required' => 'email tidak boleh kosong',
            'email.email' => 'format email tidak sesuai',
            'email.unique'=> 'email sudah terdaftar',
        ];
    }
}
