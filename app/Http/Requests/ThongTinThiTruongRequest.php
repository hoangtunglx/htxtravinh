<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

<<<<<<< HEAD
class ThongTinThiTruongRequest extends FormRequest
=======
class NongSanRequest extends FormRequest
>>>>>>> 6745f17d48ab84ebf1090075ffe3951422a1daf0
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
            'nongsan_id' => 'required',
            'ngaycapnhat' => 'required|date',
            'dongia' => 'required|min:0',
            'chinhsachkhuyenmai' => 'nullable|max:191',

        ];
    }

    public function messages()
    {
        return [
            'ngaycapnhat.required' => 'Vui lòng nhập ngày cập nhật',
<<<<<<< HEAD
            'ngaycapnhat.date' => 'Đây không phải là ngày hợp lệ',
            'nongsan_id.required' => 'Vui lòng chọn loại nông sản',
            'dongia.required' => 'Vui lòng nhập đơn giá',
            'dongia.min' => 'Vui lòng nhập lại đơn giá',
=======
            'nongsan_id.required' => 'Vui lòng chọn loại nông sản',
            'dongia.required' => 'Vui lòng nhập đơn giá',
            
>>>>>>> 6745f17d48ab84ebf1090075ffe3951422a1daf0
            'chinhsachkhuyenmai.max' => 'Chính sách khuyến mãi vượt quá ký tự cho phép'
        ];
    }
}
