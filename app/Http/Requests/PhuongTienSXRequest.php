<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhuongTienSXRequest extends FormRequest
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
            'hoptacxa_id' => 'required',
            'loaiphuongtien_id' => 'required',
            'masophuongtien' => 'required|unique:phuongtiensx|max:25',
            'tenphuongtien' => 'required|max:191',
            'ngaymua' => 'required|date',
            'nhasanxuat' => 'nullable|max:191',
            'namsanxuat' => 'nullable|digits:4|integer|min:1900|max:'.(date('Y')+0),
            'nuocsanxuat' => 'nullable|max:50',
            'dientich' => 'nullable|max:50',
            'vitri' => 'nullable|max:50',
            'mota' => 'nullable|max:191',
            'trangthai' => 'nullable|max:191'
        ];
    }

    public function messages()
    {
        return [
            'hoptacxa_id.required' => 'Vui lòng chọn hợp tác xã',
            'loaiphuongtien_id.required' => 'Vui lòng chọn phương tiện',
            'masophuongtien.required' => 'Vui lòng nhập mã số phương tiện',
            'masophuongtien.unique' => 'Mã số phương tiện không được trùng',
            'masophuongtien.max' => 'Mã phương tiện vượt quá ký tự cho phép',
            'tenphuongtien.required' => 'Vui lòng nhập tên phương tiện',
            'ngaymua.required' => 'Vui lòng nhập ngày mua',
            'ngaymua.date' => 'Đây không phải là ngày hợp lệ',
     
            'nhasanxuat.max' => 'Nhà sản xuất vượt quá ký tự',
            'namsanxuat.digits' => 'Năm sản xuất phải là 4 số',
            'namsanxuat.integer' => 'Năm sản xuất phải là số',
            'namsanxuat.max' => 'Năm sản xuất không được lớn hơn năm hiện tại',
            'nuocsanxuat.max' => 'Nhà sản xuất vượt quá ký tự cho phép',
            'dientich.max' => 'Nhà sản xuất vượt quá ký tự cho phép',
            'vitri.max' => 'Nhà sản xuất vượt quá ký tự cho phép',
            'mota.max' => 'Nhà sản xuất vượt quá ký tự cho phép',
            'trangthai.max' => 'Nhà sản xuất vượt quá ký tự cho phép',

        ];
    }
}
