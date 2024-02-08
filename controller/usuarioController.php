<?php
class UsuarioController
{
    private $model;

    public function __construct(UsuarioModel $model)
    {
        $this->model = $model;
    }

    public function listarUsuarios()
    {
        return $this->model->listarUsuarios();
    }

    public function adicionarUsuario($nome, $perfil, $senha, $confirmaSenha)
    {
        return $this->model->adicionarUsuario($nome, $perfil, $senha, $confirmaSenha);
    }

    public function atualizarUsuario($id, $nome, $perfil)
    {
        return $this->model->atualizarUsuario($id, $nome, $perfil);
    }

    public function excluirUsuario($id)
    {
        return $this->model->excluirUsuario($id);
    }

    // Adicione outros métodos conforme necessário
}
