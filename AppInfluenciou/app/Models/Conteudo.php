<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    use HasFactory;

    protected $table = 'conteudos';
    protected $fillable = ['titulo', 'descricao', 'link', 'modulo_id'];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class, 'modulo_if');
    }
}
