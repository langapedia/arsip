<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notulen extends Model
{
    use HasFactory;
    protected $fillable = [
        'acara',
        'waktu',
        'tempat',
        'file'

    ];
}
