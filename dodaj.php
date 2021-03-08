<?php

/**
 * Dokument odbierający zmienną 'nazwa' jako superglobalną tablice: $_POST('nazwa');
 * Dokument dodaje do bazy danych Mysqli: insert into
 */
include_once('polaczenie.php');
$nazwa = $_POST['nazwa'];
echo("
 <br> $nazwa <br>
");


$zapytanie_insert = $polaczenie->query("INSERT INTO nazwa(nazwa) values('$nazwa');");


$polaczenie->close();
?>