<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhanBonRequest extends FormRequest
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
            'tenphanbon' => 'required',
			'loaiphanbon_id'=> 'required'
        ];
    }
	public function messages()
    {
        return [
            'tenphanbon.required' => 'Vui lòng nhập tên phân bón!',
			'loaiphanbon_id.required' => 'Vui lòng chọn loại phân bón!'
        ];
    }
}
