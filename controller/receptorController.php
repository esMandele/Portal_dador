<?php

    require_once("C:/xampp/htdocs/portaldodador/models/receptor.php");


    class receptorController extends Receptor{

        function inserirReceptor(Receptor $receptor){
            $querysql = "INSERT INTO receptor (nomereceptor, idadereceptor, generoreceptor, contactoreceptor,enderecoreceptor)
            VALUES (?,?,?,?,?)";
            $stmt = $this->dbConnect()->prepare($querysql);
            $nome = $receptor->getNome();
            $idade = $receptor->getIdade();
            $genero = $receptor->getGenero();
            $contacto= $receptor->getContacto();
            $endereco = $receptor->getEndereco();
        
            $stmt->execute([$nome, $idade, $genero, $contacto, $endereco]);
        }
    }
?>    