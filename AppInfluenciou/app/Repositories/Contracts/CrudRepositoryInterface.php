<?php

namespace App\Repositories\Contracts;

interface CrudRepositoryInterface
{
    public function criarUsuario($data);
    public function buscarPorId($id);
    public function atualizarPorId($data, $id);
    public function deletarPorId($id);
    public function buscarTodos();
}
