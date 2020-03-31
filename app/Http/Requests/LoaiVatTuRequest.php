<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiVatTuRequest extends FormRequest
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
            'tenloaivattu' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenloaivattu.required' => 'Vui lòng nhập tên loại vật tư'
        ];
    }
}
