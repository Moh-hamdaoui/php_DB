<?php


$conn = include("connexion_to_DB.php");


$query = "UPDATE users SET email = 'newemail@example.com' WHERE id = 1;";


if (mysqli_query($conn, $query)) {
    echo "Email bien modifiée";
} else {
    echo "Error : " . mysqli_error($conn);
}


mysqli_close($conn);

?>
