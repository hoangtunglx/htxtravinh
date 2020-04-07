<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiPhuongTienRequest extends FormRequest
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
            'tenloaiphuongtien' => 'required|max:191',
             'mota' => 'nullable|max:191'
        ];
    }

    public function messages()
    {
        return [
            'tenloaiphuongtien.required' => 'Vui lòng nhập tên loại phương tiện',
            'tenloaiphuongtien.max' => 'Tên loại phương tiện không hợp lệ',
            'mota.max' => 'Mô tả không hợp lệ'
            
        ];
    }
}
