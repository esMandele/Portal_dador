<?php

    require_once("C:/xampp/htdocs/portaldodador/models/centro.php");

    class centroController extends Centro{

        function inserirCentro(Centro $centro){
            $querysql = "INSERT INTO centro(nomecentro, enderecocentro, contacto)
             VALUES (?, ?, ?)";
            $stmt = $this->dbConnect()->prepare($querysql);
            $nome = $centro->getNome();
            $endereco = $centro->getEndereco();
            $contacto = $centro ->getContacto();
           
            $stmt->execute([$nome,$endereco,$contacto ]);
        }

        function listarCentro(){
            $querysql = "SELECT * FROM centro";
            $stmt = $this->dbConnect()->prepare($querysql);
            $stmt->execute();
    
            if($stmt->rowCount()){
                $resultocentro = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultocentro;
            }else{
                return [];
            }
        }

        function listarCentroPorId($IdCentro){
            $querysql = "SELECT * FROM centro  WHERE id = $IdCentro";
            $stmt = $this->dbConnect()->prepare($querysql);
            $stmt->execute();
    
            if($stmt->rowCount()){
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultado;
            }else{
                return [];
            }
        }

        function deleteCentroporId($idCentro){

            $querysql = "delete * from centro where id = $idCentro"; // A query que queremos executar na bd
            $conn = $this->dbConnect()->prepare($querysql); //Preparando a query
            $conn->execute(); //Executando a query na bd
            
            
        }

        /*function atualizarCentro($IdCentro, $novoNome = null, $novaSenha = null){
            $centro = $this->listarUsuarioPorId($IdUsuario);
            
            if($novoNome == null){
                $novoNome = $usuario[0]["nomeusuario"];
            }
            if($novaSenha == null){
                $novaSenha = $usuario[0]["senhausuario"];
            }
            
            $querysql = "UPDATE usuario  SET nomeusuario = '$novoNome', senhausuario = '$novaSenha' WHERE idusuario = $IdUsuario";
    
            $stmt = $this->dbConnect()->prepare($querysql);
            $stmt->execute();
        }*/

    }

?>