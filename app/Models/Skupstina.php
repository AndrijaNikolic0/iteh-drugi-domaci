<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partija;

class Skupstina extends Model
{
    use HasFactory;

    protected $fillable = [
        'grad',
        'drzava',
        'brojPoslanika'
    ];

    public function partije()
    {
        return $this->hasMany(Partija::class);
    }
}
