<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $fillable = ['categoria', 'descricao', 'categoria_id'];

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'categoria_id');
    }

    public function categorias()
    {
        return $this->hasMany(Categoria::class, 'categoria_id');
    }

    public function subCategorias()
    {
        return $this->hasMany(Categoria::class, 'categoria_id')->with('categorias');
    }
}
