<?php
class DiagnosticoModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarDiagnostico()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM diagnostico");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarDiagnostico($descricao, $resultado, $data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO diagnostico (descricaodiagnostico, resultadodiagnostico, datadiagnostico) VALUES (?, ?, ?)");
        $stmt->execute([$descricao, $resultado, $data]);
        return $this->pdo->lastInsertId();
    }
}