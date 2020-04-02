<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoiYPhanBonNuocTuoiRequest extends FormRequest
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
           // 'tieude' => 'required'
			'thongtingoiy' => 'required'

        ];
    }

    public function messages()
    {
        return [
            //'tieude.required' => 'Vui lòng nhập tiêu đề'
			'thongtingoiy.required' => 'Vui lòng thông tin gợi ý'

        ];
    }
}
