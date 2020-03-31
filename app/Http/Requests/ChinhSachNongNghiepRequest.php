<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChinhSachNongNghiepRequest extends FormRequest
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
            'tenchinhsach' => 'required',
            'hoptacxa_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenchinhsach.required' => 'Vui lòng nhập tên nông sản',
            'hoptacxa_id.required' => 'Vui lòng chọn loại nông sản'
            
        ];
    }
}
