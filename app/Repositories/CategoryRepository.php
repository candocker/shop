<?php

declare(strict_types = 1);

namespace ModuleShop\Repositories;

class CategoryRepository extends AbstractRepository
{
    protected function _sceneFields()
    {
        return [
            'list' => ['code', 'parent_code', 'type_code', 'name', 'brief', 'description', 'orderlist', 'status'],
            'listSearch' => ['code', 'parent_code', 'type_code', 'name', 'status'],
            'add' => ['code', 'parent_code', 'type_code', 'name', 'brief', 'description', 'orderlist', 'status'],
            'update' => ['parent_code', 'name', 'brief', 'description', 'orderlist', 'status'],
        ];
    }

    public function getShowFields()
    {
        return [
            //'type' => ['valueType' => 'key'],
        ];
    }

    public function getSearchFields()
    {
        return [
            //'type' => ['type' => 'select', 'infos' => $this->getKeyValues('type')],
        ];
    }

    public function getFormFields()
    {
        return [
            'status' => ['type' => 'select', 'infos' => $this->getKeyValues('status')],
            'type_code' => ['type' => 'select', 'infos' => $this->getPointKeyValues('type')],
            'parent_code' => ['type' => 'cascader', 'props' => ['value' => 'code', 'label' => 'name', 'children' => 'subInfos', 'checkStrictly' => true], 'infos' => $this->getPointTreeDatas(null, 2, 'list')],
        ];
    }

    protected function _statusKeyDatas()
    {
        return [
            0 => '未激活',
            1 => '使用中',
            99 => '锁定',
        ];
    }
}
