<?php
include_once('polaczenie.php');

$zapytanie_SELECT = $polaczenie->query('SELECT idn,nazwa FROM nazwa;');
while(list($idn,$nazwa)=mysqli_fetch_array($zapytanie_SELECT)){
    echo("
   <br> idn: $idn, Nazwa: $nazwa 
   <a href='update.php?idnazwa=$idn' style='text-decoration:none;color:red;'>UPDATE</a>
   <a href='delete.php?idnazwa=$idn' style='text-decoration:none;color:blue;'>DELETE</a>
    ");
}





$polaczenie->close();
?>