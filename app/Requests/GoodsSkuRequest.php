<?php

declare(strict_types = 1);

namespace ModuleShop\Requests;

class GoodsSkuRequest extends AbstractRequest
{
    protected function _updateRule()
    {
        return [
            'id' => ['bail', 'required', 'exists'],
        ];
    }

    public function attributes(): array
    {
        return [
            //'name' => '名称',
        ];
    }

    public function messages(): array
    {
        return [
            //'name.required' => '请填写名称',
        ];
    }
}
