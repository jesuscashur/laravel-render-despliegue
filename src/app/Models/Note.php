<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Campos que permitimos rellenar mediante formularios
    protected $fillable = ['title', 'description', 'date', 'done'];

    // Campos protegidos que Laravel nunca dejará alterar en masa
    protected $guarded = ['id'];
}
