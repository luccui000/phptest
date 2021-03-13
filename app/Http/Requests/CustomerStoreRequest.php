<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'name'  => "required|max:255",
            'email' => "required|email", 
            'image' => "image|mimes:jpeg,png,jpg,gif,svg|max:1024"
        ]; 
    }
    public function messages()
    {
        return [
            'name.required' => 'Nhập tên đi bạn ơi',
            'name.max' => 'Tên quá giới hạn rồi bạn ơi',
            'email.required' => 'Nhập hộ tao cái email',
            'email.email' => 'Nhập email cận thẩn lại cho tao', 
            'image.image' => 'Tao cần cái hình oke',
            'image.mimes' => 'Tao cần cái đuôi: jpeg,png,jpg,gif,svg',
            'image.max' => 'Nhà tao nghèo ổ cứng không có nhiều cho mầy lưu',
        ];
    }
}
