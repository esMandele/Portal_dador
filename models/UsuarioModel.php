<?php
class UsuarioModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarUsuarios()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM usuario");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarUsuario($nome, $perfil, $senha, $confirmaSenha)
    {
        $stmt = $this->pdo->prepare("INSERT INTO usuario (nomeusuario, perfilusuario, senhausuario, confirmaSusuario) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $perfil, $senha, $confirmaSenha]);
        return $this->pdo->lastInsertId();
    }

    public function atualizarUsuario($id, $nome, $perfil)
    {
        $stmt = $this->pdo->prepare("UPDATE usuario SET nomeusuario = ?, perfilusuario = ? WHERE idusuario = ?");
        return $stmt->execute([$nome, $perfil, $id]);
    }

    public function excluirUsuario($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM usuario WHERE idusuario = ?");
        return $stmt->execute([$id]);
    }

    // Adicione outros métodos conforme necessário
}
