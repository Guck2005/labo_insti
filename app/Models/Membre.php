<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Membre extends Model
{
    protected $fillable = ['labos_id', 'id_membre'];


    public function labo()
    {
        return $this->belongsTo(Labo::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_membre');
    }


}