<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partija;

class Poslanik extends Model
{
    use HasFactory;

    protected $fillable = [
        'imePrezime',
        'adresa',
        'email',
        'partijaID',
    ];

    public function partija()
    {
        return $this->belongsTo(Partija::class);
    }
}
