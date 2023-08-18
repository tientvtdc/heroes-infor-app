<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Martyr extends Model
{
    protected $fillable = ['full_name', 'date_of_birth', 'hometown_id', 'rank', 'unit', 'position', 'date_of_sacrifice', 'grave_location_id'];

    public function graveLocation()
    {
        return $this->belongsTo(GraveLocation::class);
    }
}
