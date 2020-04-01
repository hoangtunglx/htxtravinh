<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SauBenhRequest extends FormRequest
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
            'tensaubenh' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'tensaubenh.required' => 'Vui lòng nhập tên sâu bệnh'

        ];
    }
}
