<?php

    require_once("C:/wamp64/www/portaldodador/models/Dador.php");

    class dadorController extends Dador{

        function inserirDador(Dador $dador){
            $querysql = "INSERT INTO dador (nomedador , idadedador, pesodador, generodador, historicodador, enderecodador, contactodador)
             VALUES (?, ?, ?, ?, ?, ?,?)";
            $stmt = $this->dbConnect()->prepare($querysql);
            $nome = $dador->getNome();
            $idade = $dador->getIdadde();
            $peso = $dador->getPeso();
            $genero = $dador-> getGenero();
            $historico = $dador ->getHistorico();
            $endereco = $dador->getEndereco();
            $contacto = $dador->getContacto();
           
            $stmt->execute([$nome, $idade, $peso, $genero, $historico, $endereco, $contacto]);
        }

        function listarDador(){
            $querysql = "SELECT * FROM dador";
            $stmt = $this->dbConnect()->prepare($querysql);
            $stmt->execute();
    
            if($stmt->rowCount()){
                $resultDador = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $resultDador;
            }else{
                return [];
            }
        }
    }

    ?>