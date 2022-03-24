<!DOCTYPE HTML>
<html>
  <head>
    <title>oojojojojoj</title>
  </head>
  <body>

<table>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3Kg";

$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "SELECT * FROM UCZNIOWIE";
if($rezultat = $conn->query($sql)){
    while($wiersz = $rezultat->fetch_assoc()){
        echo
        '<tr>
        <td>'.$wiersz['id'].'</td>
        <td>'.$wiersz['imie'].'</td>
        <td>'.$wiersz['nazwisko'].'</td>
        <td>'.$wiersz['srednia'].'</td>
        <td>'.$wiersz['frekwencja'].'</td>
        </tr>';
    }
}



?>
</table>
  </body>
</html>