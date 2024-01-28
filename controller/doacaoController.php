<?php

    require_once("C:/xampp/htdocs/portaldodador/models/doacao.php");

    class doacaoController extends Doacao{

        function inserirDoacao(Doacao $doacao){
            $querysql = "INSERT INTO doacao(datadoacao, horadoacao)
             VALUES (?, ?)";
            $stmt = $this->dbConnect()->prepare($querysql);
            $data = $doacao->getData();
            $hora = $doacao->getHora();
            
           
           
            $stmt->execute([$data, $hora]);
        }

    }

    ?>