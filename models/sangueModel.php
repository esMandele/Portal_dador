<?php
class SangueModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarSangue()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM sangue");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarSangue($percentagem, $quant, $compatibilidade, $tipo, $antigeno, $rh)
    {
        $stmt = $this->pdo->prepare("INSERT INTO sangue(percentagemsangue, quantsangue, compatibilidadesangue, tiposangue, antigenosangue, rhsangue) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$percentagem, $quant, $compatibilidade, $tipo, $antigeno, $rh]);
        return $this->pdo->lastInsertId();
    }
}