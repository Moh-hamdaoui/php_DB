<?php


$conn = include("connexion_to_DB.php");


$query = "select name, email from users";


$res = mysqli_query($conn, $query);


if (mysqli_num_rows($res) > 0) {
    
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Email</th></tr>";
    

    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    
    echo "</table>"; 
}


mysqli_close($conn);

?>
