<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    protected $fillable = ['partenaire'];

    public function labo()
    {
        return $this->belongsTo(Labo::class);
    }
}