<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function subcategory()
    {
        return $this->hasOne(SubCategory::class);
    }
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
