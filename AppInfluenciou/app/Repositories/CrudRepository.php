<?php

namespace App\Repositories;

abstract class CrudRepository
{
    public function criarUsuario($data)
    {
        return $this->entity->create($data);
    }

    public function buscarPorId($id)
    {
        return $this->entity->find($id);
    }

    public function atualizarPorId($data, $id)
    {
        $find = $this->buscarPorId($id);
        return $find->update($data);
    }

    public function deletarPorId($id)
    {
        return $this->entity->destroy($id);
    }

    public function buscarTodos()
    {
        return $this->entity->all();
    }
}
