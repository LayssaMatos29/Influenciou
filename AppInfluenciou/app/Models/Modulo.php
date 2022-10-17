<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $table = 'modulos';
    protected $fillable = ['nome', 'descricao', 'disponivel', 'curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function conteudos()
    {
        return $this->hasMany(Conteudo::class, 'modulo_id');
    }
}
