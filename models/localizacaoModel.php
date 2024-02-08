<?php
class LocalizacaoModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarLocalizacao()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM localizacao");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarLocalizacao($latitude, $longitude, $destino)
    {
        $stmt = $this->pdo->prepare("INSERT INTO localizacao (latitudelocalizacao, longitudelocalizacao, destinolocalizacao) VALUES (?, ?, ?)");
        $stmt->execute([$latitude, $longitude, $destino]);
        return $this->pdo->lastInsertId();
    }
}