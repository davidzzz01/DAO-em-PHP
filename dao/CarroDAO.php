<?php 
include_once("models/Carro.php");

class carroDAO implements CarroDAOInterface {
    private $conn;

    public function __construct(PDO $conn) {
        $this->conn = $conn;
    }

    public function findAll() {
      return $carro->fetchAll();
    }

    public function create(Carro $carro) {
        $sql = "INSERT INTO carros (modelo, marca, km, cor) VALUES (:modelo, :marca, :km, :cor)";
        $stmt = $this->conn->prepare($sql);

      
        $stmt->bindParam(":modelo", $carro->getModelo());
        $stmt->bindParam(":marca", $carro->getMarca());
        $stmt->bindParam(":km", $carro->getKm());
        $stmt->bindParam(":cor", $carro->getCor());

      
        $stmt->execute();
    }
}
?>
