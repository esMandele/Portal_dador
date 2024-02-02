<?php

require_once("C:/wamp64/www/portaldodador/models/Usuario.php");


class usuarioController extends Usuario{

    function inserirUsuario(Usuario $usuario){
        $querysql = "INSERT INTO usuario (nomeusuario, perfilusuario, senhausuario, confirmaSusuario)
         VALUES (?,?,?,?)";
        $stmt = $this->dbConnect()->prepare($querysql);
        $nome = $usuario->getNome();
        $perfil = $usuario->getPerfil();
        $senha = $usuario->getSenha();
        $confirmarSenha = $usuario->getSenha();
       
        $stmt->execute([$nome, $perfil, $senha, $confirmarSenha]);
    }


    function listarUsuarios(){
        $querysql = "SELECT * FROM usuario";
        $stmt = $this->dbConnect()->prepare($querysql);
        $stmt->execute();

        if($stmt->rowCount()){
            $resultUsuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultUsuario;
        }else{
            return [];
        }
    }

    function listarUsuarioPorId($IdUsuario){
        $querysql = "SELECT * FROM usuario  WHERE idusuario = $IdUsuario";
        $stmt = $this->dbConnect()->prepare($querysql);
        $stmt->execute();

        if($stmt->rowCount()){
            $resultUsuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultUsuario;
        }else{
            return [];
        }
    }

    function deleteUsuarioPorId($IdUsuario){
        $querysql = "DELETE FROM usuario WHERE id = $IdUsuario";
        $stmt = $this->dbConnect()->prepare($querysql);
        $stmt->execute();
    }

    function atualizarUsuario($IdUsuario, $novoNome = null, $novaSenha = null){
        $usuario = $this->listarUsuarioPorId($IdUsuario);
        
        if($novoNome == null){
            $novoNome = $usuario[0]["nomeusuario"];
        }
        if($novaSenha == null){
            $novaSenha = $usuario[0]["senhausuario"];
        }
        
        $querysql = "UPDATE usuario  SET nomeusuario = '$novoNome', senhausuario = '$novaSenha' WHERE idusuario = $IdUsuario";

        $stmt = $this->dbConnect()->prepare($querysql);
        $stmt->execute();
    }

}

?>