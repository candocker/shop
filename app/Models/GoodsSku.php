<?php

declare(strict_types = 1);

namespace ModuleShop\Models;

class GoodsSku extends AbstractModel
{
    protected $table = 'goods_sku';
    protected $fillable = ['name'];

}
