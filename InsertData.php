<?php


$conn = include("connexion_to_DB.php");

$query = "
INSERT INTO users (name, email) 
values 
('mohammed', 'moahammed@gmail.com'), 
('Fatima', 'fatima@gmail.com'),
('aymane', 'aymane@gmail.com');";


if (mysqli_query($conn, $query)) {
    echo "Les lignes sont bien ajoutees";
} else {
    echo "Erreur d;ajout a la table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>