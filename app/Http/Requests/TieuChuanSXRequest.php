<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TieuChuanSXRequest extends FormRequest
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
            'tentieuchuansanxuat' => 'required',
			'loaitieuchuansx_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tentieuchuansanxuat.required' => 'Vui lòng nhập tên tiêu chuẩn sản xuất',
			'loaitieuchuansx_id.required' => 'Vui lòng chọn loại tiêu chuẩn sản xuất'
        ];
    }
}
