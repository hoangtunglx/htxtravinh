<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CongNoRequest extends FormRequest
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
            'nguoidung_id' => 'required',
            'donhang_id' => 'nullable',
            'donthue_id' => 'nullable',
            'muavu_id' => 'nullable',
            'sotienconno' => 'required|integer'
            
        ];
    }

    public function messages()
    {
        return [
            'nguoidung_id.required' => 'Vui lòng chọn người dùng',
            'sotienconno.required' => 'Vui lòng nhập số tiền',
            'sotienconno.integer' => 'Vui lòng nhập lại số tiền'
        ];
    }
}
