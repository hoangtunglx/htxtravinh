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
            'tennongsan' => 'required|max:191',
            'loainongsan_id' => 'required',
            'mota' => 'nullable|max:191'
        ];
    }

    public function messages()
    {
        return [
            'tennongsan.required' => 'Vui lòng nhập tên nông sản',
            'tennongsan.max' => 'Tên nông sản không hợp lệ',
            'loainongsan_id.required' => 'Vui lòng chọn loại nông sản',
            'mota.max' => 'Mô tả không hợp lệ'
        ];
    }
}
