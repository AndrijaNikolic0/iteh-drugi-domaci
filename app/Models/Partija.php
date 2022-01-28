<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skupstina;
use App\Models\Poslanik;

class Partija extends Model
{
    use HasFactory;

    public function skupstina()
    {
        return $this->belongsTo(Skupstina::class);
    }

    public function poslanici()
    {
        return $this->hasMany(Poslanik::class);
    }
}
