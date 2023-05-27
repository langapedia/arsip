<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_tamu_pumum extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 
        'no_hp', 
        'keperluan',
        'alamat'
    ];
}
