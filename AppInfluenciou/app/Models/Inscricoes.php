<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricoes extends Model
{
    use HasFactory;

    protected $table = 'inscricoes';
    protected $fillable = ['curso_id'];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
