<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'no_telp' => 'required',
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'kategori_layanan' => 'required',
            'keterangan_pesanan' => 'required',
            'status_pesanan' => 'required'

        ];
    }

    public function messages()
    {

        return [
            'no_telp.required' => 'No telpon tidak boleh kosong',
            'nama_pelanggan.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'kategori_layanan.required' => 'Kategori layanan tidak boleh kosong',
            'keterangan_pesanan.required' => ' Keterangan pesanan tidak boleh kosong',
            'status_pesanan.required' => 'Status pesanan tidak boleh kosong'
        ];
    }

}



