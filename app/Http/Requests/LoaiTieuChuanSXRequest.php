<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiTieuChuanSXRequest extends FormRequest
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
            'tenloaitieuchuansx' => 'required',
			'mota' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenloaitieuchuansx.required' => 'Vui lòng nhập tên loại tiêu chuẩn sản xuất',
			'mota.required' => 'vui lòng nhập mô tả'
        ];
    }
}
