<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_test';

$conn = mysqli_connect($host, $user, $pass, $db);
if($conn){
    echo 'connected!';
    return $conn;
}else{
    echo 'Erreur Connexion';
}


?>