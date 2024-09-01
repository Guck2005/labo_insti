<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impact extends Model
{
    protected $fillable = ['impact'];

    public function labo()
    {
        return $this->belongsTo(Labo::class);
    }
}
