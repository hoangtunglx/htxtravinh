<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeHoachSanXuat_ThuaDatRequest extends FormRequest
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
            'tenkehoachsanxuat_thuadat' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenkehoachsanxuat_thuadat.required' => 'Vui lòng nhập tên kế hoạch sản xuất thửa đất'
        ];
    }
}
