<?php
include_once('polaczenie.php');
if(isset($_GET['idnazwa'])){

$id=$_GET['idnazwa'];
$zapytanie_DELETE = $polaczenie->query("DELETE FROM nazwa WHERE idn=$id");
echo("Usunięto record z bazy danych");



}











$polaczenie->close();
?>