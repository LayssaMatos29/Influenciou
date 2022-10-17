<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $fillable = ['nome', 'descricao', 'preco', 'disponivel', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function modulos()
    {
        return $this->hasMany(Modulo::class, 'curso_id');
    }
}
