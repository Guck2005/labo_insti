<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perspective extends Model
{
    protected $fillable = ['perspective'];

    public function labo()
    {
        return $this->belongsTo(Labo::class);
    }
}
