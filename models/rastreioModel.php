<?php
class RastreioModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarRastreio()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM rastreio");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarRastreio($tipo, $descricao, $data, $hora)
    {
        $stmt = $this->pdo->prepare("INSERT INTO diagnostico (tiporastreio, descricaorastreio, datarastreio, horarastreio) VALUES (?, ?, ?, ?)");
        $stmt->execute([$tipo, $descricao, $data, $hora]);
        return $this->pdo->lastInsertId();
    }
}