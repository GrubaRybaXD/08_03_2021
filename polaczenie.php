<?php
$host='localhost';
$user='root';
$password = '';
$dbname='dawidszymczak';
$port=3306;

$polaczenie = @new Mysqli($host,$user,$password,$dbname,$port);

if(Mysqli_connect_errno()!=0){
    echo("Błąd połączenie do bazy danych: ".Mysqli_connect_error());
}else{
    echo("Połączenie do bazy danych");
}




?>