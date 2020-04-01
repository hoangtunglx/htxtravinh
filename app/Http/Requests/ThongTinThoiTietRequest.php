<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThongTinThoiTietRequest extends FormRequest
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
      'luongmua' => 'required'
		//'sucgio' => 'required'
		//'huonggio' => 'required'

        ];
    }

    public function messages()
    {
        return [
      'luongmua.required' => 'Vui lòng nhập lượng mưa'
			//'sucgio.required' => 'Vui lòng nhập sức gió'
			//'huonggio.required' => 'Vui lòng nhập hướng gió'

        ];
    }
}
