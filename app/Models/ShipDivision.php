<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipDivision extends Model
{
    protected $guarded = [];

    public function division(){
        return $this->hasMany(ShipDivision::class);
    }


}
