<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:1|max:255',
            'article' => 'required|string|min:1|max:255',
            'minPrice' => [
                'required',
                'numeric',
                'min:0',
                'max:9999999999999999.99' // максимум для DECIMAL(18,2), чтобы не пропускал значения, роняющих запрос
            ],
            'width' => [
                'required',
                'numeric',
                'min:0',
                'max:9999999999999999.99'
            ],
            'product_type_id' => 'required|integer|exists:product_types,id',
        ];
    }

    // Перевод ошибок с английского по типу ошибки
    public function messages(): array
    {
        return [
            'required'  => 'Обязательно для заполнения',
            'string'    => 'Должно быть строкой',
            'integer'   => 'Должно быть целым числом',
            'numeric'   => 'Должно быть числом',
            'exists'    => 'Должно существовать',
            'min'       => 'Минимум :min',
            'max'       => 'Максимум :max',
        ];
    }
}
