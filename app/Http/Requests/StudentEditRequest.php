<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentEditRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'nis' => 'max:7|required',
            'name' => 'max:50|required',
            'gender' => 'required',
            'class_id' => 'required'

        ];
    }

    public function attributes()
    {
        return [
            'class_id' => 'kelas',
        ];
    }

    public function messages()
    {
        return [
            'nis.required' => 'NIS Harus Diisi',
            'nis.max' => 'NIS Maksimal :max Karakter',
            'name.required' => 'Nama Harus Diisi',
            'name.max' => 'Nama Maksimal 50 Karakter',
            'gender.required' => 'Gender Harus Diisi',
            'class_id.required' => 'Kelas Harus Diisi'

        ];
    }

}
