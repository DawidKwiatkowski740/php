<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "3Kg";

$conn = new mysqli($servername,$username,$password,$dbname);

$sql = "INSERT INTO uczniowie VALUES (NULL, '"$_POST['imie']."','"$_POST['nazwisko']."','"$_POST['srednia']."','"$_POST['frekwencja'].")";
$conn->query($sql);
hooder('Location: ../daw.kwia/');
?>