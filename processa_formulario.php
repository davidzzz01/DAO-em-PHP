<?php

include_once("models/Carro.php");
include_once("dao/CarroDAO.php");

$carroDAO = new CarroDAO($conn);

$marca = $_POST["marca"];
$km = $_POST["km"];
$cor = $_POST["cor"];

$novoCarro = new Carro();

$novoCarro->setMarca($marca);
$novoCarro->setKm($km);
$novoCarro->setCor($cor);

$carroDAO->create($novoCarro);

header("Location: index.php");
exit();

?>
