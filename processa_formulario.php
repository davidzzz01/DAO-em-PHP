<?php 

include_once("db.php");
include_once("dao/CarroDAO.php");
include_once("dao/CarroDAO.php");


$novo_carro= new CarroDAO($conn);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $modelo = $_POST['modelo'] ;
    $marca = $_POST['marca'] ;
    $km = $_POST['km'];
    $cor = $_POST['cor'];


}
$novo_carro->setModelo($modelo);
$novo_carro->setMarca($marca);
$novo_carro->setKm($km);
$novo_carro->setCor($cor);

$carroDAO->create();

header("Location: index.php");