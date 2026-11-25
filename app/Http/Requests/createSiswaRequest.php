<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

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
            'nomor_induk' => ['required', 'integer', 'unique:users,nomor_induk'],
            'nama_lengkap' => ['required', 'string'],
            // 'jenis_kelamin' 
            'tempat_lahir' => ['required', 'string'],
            // 'tanggal_lahir' => ['required'],
            'alamat' => ['required', 'string'],
            'nomor_telepon' => ['required', 'integer', 'unique:users,nomor_telepon'],
            'email' => ['required', 'email', 'unique:users,email'],
        ];
    }
}
