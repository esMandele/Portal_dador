<?php 
    require_once("C://wamp64/www/portaldodador/models/rastreio.php");

    class rastreioController extends Rastreio{
        function inserirRastreio(Rastreio $rastreio){
            $querysql = "INSERT INTO rastreio(tipoexamerastreio, descricaorastreio, datarastreio, horarastreio) VALUES(?, ?, ?, ?)";

            $stmt = $this->dbConnect()->prepare($querysql);
            $tipoexame = $rastreio->getTipoexame();
            $descricao = $rastreio->getDescricao();
            $data = $rastreio->getData();
            $hora = $rastreio ->getHora();

            $stmt->execute([$tipoexame, $descricao, $data, $hora]);
        }
    }
?>