<?php

$servername = "andy-auta.cz";
$username = "andyautabenj";
$password = "v2BYgYc4RB";
$dbname = "andyautabenj";

//connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Připojení se nezdařilo: " . $conn->connect_error);
}
echo "Úspěšné připojení";


$sql = "SELECT * FROM zakaznici";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Jméno: " . $row["jmeno"]. " - Příjmení: " . $row["prijmeni"]. " - Datum narození: " . $row["datum_narozeni"]. "<br>";
    }
} else {
    echo "0 záznamů";
}

//close connection
$conn->close();


?>