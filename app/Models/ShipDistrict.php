<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipDistrict extends Model
{
    protected $guarded = [];

    public function division()
    {
        return $this->belongsTo(ShipDivision::class, 'division_id', 'id');
    }

    public function states(): HasMany
    {
        return $this->hasMany(ShipState::class, 'district_id', 'id');
    }
}
