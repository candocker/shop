<?php

declare(strict_types = 1);

namespace ModuleShop\Models;

class Category extends AbstractModel
{
    protected $table = 'category';
    //protected $guarded = ['id'];
    protected $primaryKey = 'code';
    public $incrementing = false;
    public $timestamps = false;

    public function type()
    {
        return $this->hasOne(Type::class, 'code', 'type_code');
    }
}
