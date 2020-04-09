<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VungNguyenLieuRequest extends FormRequest
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
            'tenvungnguyenlieu' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenvungnguyenlieu.required' => 'Vui lòng nhập tên vùng nguyên liệu'			
        ];
    }
}
