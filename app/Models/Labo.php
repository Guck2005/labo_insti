<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Labo extends Model
{
    protected $fillable = ['labo_name', 'type_labo', 'directeur_labo', 'description_labo', 'photo_labo'];

    public function missions()
    {
        return $this->hasMany(Mission::class, 'labos_id');
    }

    public function technologies()
    {
        return $this->hasMany(Technologie::class, 'labos_id');
    }

    public function type()
    {
        return $this->belongsTo(Globals::class, 'type_labo');
    }

    public function impacts()
    {
        return $this->hasMany(Impact::class,  'labos_id');
    }

    public function perspectives()
    {
        return $this->hasMany(Perspective::class, 'labos_id');
    }

    public function membres()
    {
        return $this->hasMany(Membre::class, 'labos_id');
    }
    
    public function directeur()
    {
        return $this->belongsTo(User::class, 'directeur_labo');
    }

    public function historiqueDirecteurs()
    {
        return $this->hasMany(HistoriqueDirecteur::class, 'labo_id');
    }
}

