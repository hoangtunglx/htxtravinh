<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThongTinMoiTruongRequest extends FormRequest
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
    'nhietdo' => 'required'
	  // 'doamkhongkhi' => 'required'
    //'doamdat' => 'required'
   //  'doph' => 'required'
   // 'doman' => 'required'
  //  'mucnuoc' => 'required'





        ];
    }

    public function messages()
    {
        return [
    'nhietdo.required' => 'Vui lòng nhập nhiệt độ'
  //  'doamkhongkhi.required' => 'Vui lòng nhập độ ẩm không khí'
   // 'doamdat.required' => 'Vui lòng nhập độ ẩm đất'
  // 'doph.required' => 'Vui lòng nhập độ ph'
 //   'doman.required' => 'Vui lòng nhập độ mặn'
  //  'mucnuoc.required' => 'Vui lòng nhập mực nước'


        ];
    }
}
