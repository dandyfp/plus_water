<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RfIdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

                'id' => 'required|unique:rf_id',
                'rf_id'=>'required',
                'nama' => 'required',
                'jenis_kelamin'=>'required',
                'telpon' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'id'=>'Id User',
            'rf_id' => 'RF ID',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis kelamin',
            'telpon' => 'Telpon',
        ];
    }
}
