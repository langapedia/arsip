<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku_Tamu_Pelayanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 
        'keperluan', 
        'no_hp'
    ];
}
