<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiongRequest extends FormRequest
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
            'loaigiong_id' => 'required',
            'tengiong' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'loaigiong_id.required' => 'Vui lòng chọn loại giống',
            'tengiong.required' => 'Vui lòng nhập tên giống'
        ];
    }
}
