<?php
class EstoqueModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarEstoque()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM estoque");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarEstoque($data, $quant)
    {
        $stmt = $this->pdo->prepare("INSERT INTO estoque ( dataestoque, quantestoque) VALUES (?, ?, ?)");
        $stmt->execute([ $data, $quant]);
        return $this->pdo->lastInsertId();
    }
}