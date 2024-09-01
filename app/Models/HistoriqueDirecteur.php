<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriqueDirecteur extends Model
{
    use HasFactory;

    protected $fillable = ['labo_id', 'ancien_directeur_id', 'nouveau_directeur_id', 'date_debut', 'date_fin'];

    public function laboratoire()
    {
        return $this->belongsTo(Labo::class, 'labo_id');
    }

    public function directeur()
    {
        return $this->belongsTo(User::class, 'directeur_id');
    }


    public function ancienDirecteur()
    {
        return $this->belongsTo(User::class, 'ancien_directeur_id');
    }

    public function nouveauDirecteur()
    {
        return $this->belongsTo(User::class, 'nouveau_directeur_id');
    }

}
