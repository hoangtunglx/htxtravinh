<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoanhNghiepRequest extends FormRequest
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
            'tendoanhnghiep' => 'required',
			'nguoidaidien' => 'required',
			'diachi' => 'required',
			'sodienthoai' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tendoanhnghiep.required' => 'Vui lòng nhập tên doanh nghiệp',
			'nguoidaidien.required' => 'Vui lòng nhập tên người đại diện',
			'diachi.required' => 'Vui lòng nhập địa chỉ',
			'sodienthoai.required' => 'Vui lòng nhập số điện thoại'
        ];
    }
}
