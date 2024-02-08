<?php
class ReceptorModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarReceptor()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM receptor");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarReceptor($nome,$datanasc, $genero, $contacto, $endereco)
    {
        $stmt = $this->pdo->prepare("INSERT INTO receptor (nomereceptor, datanascreceptor, generoreceptor, enderecoreceptor, contactoreceptor) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nome, $datanasc, $genero, $endereco, $contacto]);
        return $this->pdo->lastInsertId();
    }
}