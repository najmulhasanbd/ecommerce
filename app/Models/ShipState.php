<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShipState extends Model
{
    protected $guarded = [];

    public function district()
    {
        return $this->belongsTo(ShipDistrict::class, 'district_id', 'id');
    }

    // Relationship to ShipDivision (through ShipDistrict)
    public function division()
    {
        return $this->belongsTo(ShipDistrict::class, 'district_id', 'id')->belongsTo(ShipDivision::class, 'division_id');
    }
}
