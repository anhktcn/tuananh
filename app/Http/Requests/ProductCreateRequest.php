<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'name' => 'required|unique:products',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'sale_price' => 'lt:price',
            // 'upload' => 'file|mimes: jpg, jpeg, png, gif'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.required' => 'Tên sản phẩm đã được sử dụng',
            'price.required' => 'Giá sản phẩm không được để trống',
            'price.numeric' => 'Giá sản phẩm phải là sô',
            'sale_price.required' => 'Giá KM không được để trống',
            'sale_price.numeric' => 'Giá KM phải là sô',
            'sale_price.lt' => 'Giá KM phải < giá gốc',
            'upload.mimes' => 'Ảnh phải có định dạng VD jpg, jpeg, png, gif'
        ];
    }
}
