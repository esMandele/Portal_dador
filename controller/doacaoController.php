<?php

    require_once("C:/wamp64/www/portaldodador/models/doacao.php");

    class doacaoController extends Doacao{

        function inserirDoacao(Doacao $doacao){
            $querysql = "INSERT INTO doacao(tipodoacao, datadoacao, horadoacao, descricaodoacao)
             VALUES (?, ?, ?, ?)";
            $stmt = $this->dbConnect()->prepare($querysql);
            $tipo = $doacao->getTipo();
            $data = $doacao->getData();
            $hora = $doacao->getHora();
             $descricao =$doacao->getDescricao();
           
           
            $stmt->execute([$tipo, $data, $hora, $descricao]);
        }

        function listarCentro(){
            $querysql = "SELECT * FROM doacao";
            $stmt = $this->dbConnect()->prepare($querysql);
            $stmt->execute();
    
            if($stmt->rowCount()){
                $resultdoacao = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultdoacao;
            }else{
                return [];
            }
        }


    }

    ?>