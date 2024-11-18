<?php
$host = "localhost";
$name = "hpweb";
$user = "root";
$passwort = "";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Fehler: ".$e->getMessage();
}
 ?>
