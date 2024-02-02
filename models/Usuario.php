<?php

require_once("C:/wamp64/www/portaldodador/dataBase/ConnectToDB.php");
Class Usuario extends ConnectToDB {

    
    private $id;
    private $nome;
    private $perfil;
    private $senha;
    private $confirmarSenha;
    
    public function getId() { return $this->id; }

    public function setId($idUser) { $this->id = $idUser;}

    public function getNome() { return $this->nome; }

    public function setNome($nomeUser) { $this->nome = $nomeUser;}

    public function getPerfil() { return $this->perfil; }

    public function setPerfil($perfilUser) { $this->perfil = $perfilUser;}

    public function getSenha() { return $this->senha; }

    public function setSenha($senhaUser) { $this->senha = $senhaUser;}

    public function getConfirmarSenha() { return $this->confirmarSenha; }

    public function setConfirmarSenha($confirmarSenhaUser) { $this->confirmarSenha = $confirmarSenhaUser;}
}
?>