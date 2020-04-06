<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiNongSanRequest extends FormRequest
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
            'tenloainongsan' => 'required|max:191',
            'mota' => 'nullable|max:191'
        ];
    }

    public function messages()
    {
        return [
            'tenloainongsan.required' => 'Vui lòng nhập tên loại nông sản',
            'tenloainongsan.max' => 'Tên loại nông sản không hợp lệ',
            'mota.max' => 'Mô tả không hợp lệ'
        
        ];
    }
}
