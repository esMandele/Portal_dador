<?php
class DadorModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarDador()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM dador");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarDador($nome, $datanascdador, $peso, $genero, $historico, $endereco, $contacto)
    {
        $stmt = $this->pdo->prepare("INSERT INTO dador (nomedador, datanascdador, pesodador, generodador, historicodador, enderecodador, contactodador ) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$nome, $datanascdador, $peso, $genero, $historico, $endereco, $contacto]);
        return $this->pdo->lastInsertId();
    }
}