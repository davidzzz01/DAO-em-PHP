<?php

include_once("db.php");
include_once("models/Carro.php");

class CarroDAO implements CarroDAOInterface {

    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function findAll() {
        $carros = [];

        $stmt = $this->conn->query("SELECT * FROM carros");
        $data = $stmt->fetchAll();

        foreach ($data as $item) {
            $carro = new Carro();
            $carro->setId($item["id"]);
            $carro->setMarca($item["marca"]);
            $carro->setKm($item["km"]);
            $carro->setCor($item["cor"]);

            $carros[] = $carro;
        }

        return $carros;
    }

    public function create(Carro $carro) {
        $stmt = $this->conn->prepare("INSERT INTO carros (marca, km, cor) VALUES (:marca, :km, :cor)");

        $stmt->bindParam(":marca", $carro->getMarca());
        $stmt->bindParam(":km", $carro->getKm());
        $stmt->bindParam(":cor", $carro->getCor());

        $stmt->execute();
    }
}

?>
