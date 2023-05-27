<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_tamu_khusus extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 
        'keperluan', 
        'no_hp',
        'instansi',
        'uraian'
    ];
}
