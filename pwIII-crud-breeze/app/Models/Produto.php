<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_p',
        'tipo_p',
        'valor_p',
        'estoque_p',
        'validade_p'
    ];
}
