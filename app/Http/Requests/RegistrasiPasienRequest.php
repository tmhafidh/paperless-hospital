<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrasiPasienRequest extends FormRequest
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
            'no_rm' => 'required',
            'no_registrasi' => 'required',
            'no_rawat' => 'required',
            'id_poli' => 'required',
            'tgl_registrasi' => 'required',
        ];
    }
}
