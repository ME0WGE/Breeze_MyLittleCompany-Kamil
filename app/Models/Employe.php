<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'departement_id'];

    public function departement() {
        return $this->belongsTo(Departement::class);
    }

    public function profil() {
        return $this->hasOne(Profil::class);
    }
}
