<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $fillable = ['receita', 'valor_receita','tipo_receita_id', 'user_id']; 


    public function tipoReceitas()
    {
        return $this->belongsTo(\App\Models\TipoReceita::class, 'tipo_receita_id');
    }


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    use HasFactory;
}
