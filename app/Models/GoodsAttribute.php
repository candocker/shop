<?php

declare(strict_types = 1);

namespace ModuleShop\Models;

class GoodsAttribute extends AbstractModel
{
    protected $table = 'goods_attribute';
    protected $fillable = ['name'];

}
