<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NongSanRequest extends FormRequest
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
            'nongsan_id' => 'required',
            'ngaycapnhat' => 'required|date',
            'dongia' => 'required|min:0',
            'chinhsachkhuyenmai' => 'nullable|max:191',

        ];
    }

    public function messages()
    {
        return [
            'ngaycapnhat.required' => 'Vui lòng nhập ngày cập nhật',
            'nongsan_id.required' => 'Vui lòng chọn loại nông sản',
            'dongia.required' => 'Vui lòng nhập đơn giá',
            
            'chinhsachkhuyenmai.max' => 'Chính sách khuyến mãi vượt quá ký tự cho phép'
        ];
    }
}
