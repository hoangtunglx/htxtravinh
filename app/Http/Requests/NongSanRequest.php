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
            'tennongsan' => 'required',
            'loainongsan_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tennongsan.required' => 'Vui lòng nhập tên nông sản',
            'loainongsan_id.required' => 'Vui lòng chọn loại nông sản'
        ];
    }
}
