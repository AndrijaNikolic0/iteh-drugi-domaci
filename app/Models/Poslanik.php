<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partija;

class Poslanik extends Model
{
    use HasFactory;

    public function partija()
    {
        return $this->belongsTo(Partija::class);
    }
}
