<?php

$servername = "localhost";
$username = "root";
$password = "ss1234567890";
$dbname = "zipcode_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

$sql = " SELECT*
	FROM  zipcode_table 
 	WHERE Code_postal='".$_POST['zipcode']."'";	

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["Libelle_acheminement"] ." (" . $row["Code_postal"].")";
    }
} else {
    echo "Zip code not found!";
}
$conn->close();

?>

