<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'employe_id'];

    public function employe() {
        return $this->belongsTo(Employe::class);
    }
}
