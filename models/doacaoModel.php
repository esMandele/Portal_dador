<?php
class DoacaoModel
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function listarDoacao()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM doacao");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionarDoacao($tipo, $data, $hora, $descricao)
    {
        $stmt = $this->pdo->prepare("INSERT INTO doacao (tipodoacao, datadoacao, horadoacao, descricaodoacao ) VALUES (?, ?, ?, ?)");
        $stmt->execute([$tipo,$data, $hora, $descricao]);
        return $this->pdo->lastInsertId();
    }
}