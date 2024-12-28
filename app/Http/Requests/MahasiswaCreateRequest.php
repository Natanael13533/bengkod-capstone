<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'namaMhs' => 'required|string|max:255',
            'nim' => 'required|string|max:15',
            'ipk' => 'required|numeric|between:0,4.00',
        ];
    }

    public function messages()
    {
        return [
            'namaMhs.required' => 'Nama mahasiswa wajib di isi',
            'namaMhs.string' => 'Nama mahasiswa harus berupa teks',
            'namaMhs.max' => 'Nama mahasiswa maksimal 255 karakter',
            'nim.required' => 'NIM wajib di isi',
            'nim.string' => 'NIM harus berupa teks',
            'nim.max' => 'NIM maksimal 15 karakter',
            'ipk.required' => 'IPK wajib di isi',
            'ipk.numeric' => 'IPK harus berupa angka',
            'ipk.between' => 'IPK harus bernilai antara 0 sampai 4.00'
        ];
    }
}
