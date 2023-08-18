<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GraveLocation extends Model
{
    protected $fillable = ['grave_number', 'grave_row', 'grave_lot', 'grave_area', 'other_info', 'grave_type', 'has_remains'];

    public function martyrs()
    {
        return $this->hasMany(Martyr::class);
    }
}
