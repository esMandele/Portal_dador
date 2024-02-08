<?php
class CentroModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarCentro()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM centro");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarCentro($nome, $sector, $endereco, $contacto)
    {
        $stmt = $this->pdo->prepare("INSERT INTO dador (nomecentro, sectorcentro, enderecocentro, contactocentro ) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome,$sector, $endereco, $contacto]);
        return $this->pdo->lastInsertId();
    }
}