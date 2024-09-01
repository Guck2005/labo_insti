<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologie extends Model
{
    protected $fillable = ['technologie'];

    public function labo()
    {
        return $this->belongsTo(Labo::class);
    }
}
