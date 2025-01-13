<?php

namespace App\Models;

use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $guarded = [];

    public function attributevalue()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
