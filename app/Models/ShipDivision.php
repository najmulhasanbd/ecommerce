<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipDivision extends Model
{
    protected $guarded = [];

    public function districts(): HasMany
    {
        return $this->hasMany(ShipDistrict::class, 'division_id', 'id');
    }

    public function division(): HasMany
    {
        return $this->hasMany(ShipState::class, 'division_id', 'id');
    }
}
