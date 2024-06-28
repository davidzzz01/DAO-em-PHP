<?php 
$bd="daotest";
$host="localhost";
$user="root";
$pass="root";

$conn= new PDO("mysql:dbname=$bd;host=$host",$user, $pass);

if($conn ) {
    echo "";
} else {
    echo "Erro na conexão.";
}

?>