<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aporte extends Model
{
    use HasFactory;
    protected $table = 'aporte';
    protected $fillable = [
        'fecha_transaccion',
        'cost',
        'ci'
    ];
}
