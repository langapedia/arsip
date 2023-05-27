<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_tamu_kedinasan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 
        'lembaga', 
        'keperluan'
    ];
}
