<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoReceita extends Model
{

    protected $fillable = ['tipo_receita', 'descricao_tipo_receita']; 

    use HasFactory;
}
