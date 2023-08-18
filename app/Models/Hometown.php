<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hometown extends Model
{
    protected $fillable = ['province', 'district', 'village'];

    public function martyrs()
    {
        return $this->hasMany(Martyr::class);
    }
}
