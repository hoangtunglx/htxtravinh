<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DuBaoSauBenhRequest extends FormRequest
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
            'saubenh_id' => 'required'
			// 'vungnguyenlieu_id' => 'required'
			 // 'muavu_id' => 'required'
			
        ];
    }

    public function messages()
    {
        return [
            'saubenh_id.required' => 'Vui lòng chọn '
			//'vungnguyenlieu_id.required' => 'Vui lòng chọn'
			//'muavu_id.required' => 'Vui lòng chọn'
        ];
    }
}
