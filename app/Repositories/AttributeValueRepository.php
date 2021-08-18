<?php
declare(strict_types = 1);

namespace ModuleShop\Repositories;

class AttributeValueRepository extends AbstractRepository
{
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
            //'type' => ['type' => 'select', 'infos' => $this->getKeyValues('type')],
        ];
    }

    protected function _sceneFields()
    {
        return [
            'list' => ['id', 'name'],
            'listSearch' => ['id', 'name', 'attribute_id'],
            'add' => ['name'],
            'update' => ['name'],
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
