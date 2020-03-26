<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThuocBvtvRequest extends FormRequest
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
            'loaithuocbvtv_id' => 'required',
            'tenthuocbvtv' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'loaithuocbvtv_id.required' => 'Vui lòng chọn loại thuốc',
            'tenthuocbvtv.required' => 'Vui lòng nhập tên thuốc'
        ];
    }
}
