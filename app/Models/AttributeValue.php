<?php

declare(strict_types = 1);

namespace ModuleShop\Models;

class AttributeValue extends AbstractModel
{
    protected $table = 'attribute_value';
    protected $fillable = ['name'];

}
