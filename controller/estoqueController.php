<?php 
    require_once("C://wamp64/www/portaldodador/models/estoque.php");

    class estoqueController extends Estoque{
        function inserirEstoque(Estoque $estoque){
            $querysql = "INSERT INTO estoque (dataestoque, quantestoque) values(?, ?)";

            $stmt = $this->dbConnect()->prepare($querysql);
            $data = $estoque->getData();
            $quant = $estoque->getQuant();

            $stmt->execute([$data, $quant]);
        }
    }
?>
