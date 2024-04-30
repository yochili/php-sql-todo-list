<?php
$host = 'localhost' ;
$user = 'root' ;
$pass = '' ;
$db ='todolist' ;

try {
    $dbcon = new PDO("mysql:host=$host",$user,$pass);
    $dbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    $sql = "CREATE DATABASE $db";
    $dbcon->exec($sql);
    echo 'la base de donnée a bien ete créée';


    $dbcon = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $sql = "CREATE TABLE Tache(
        id INT AUTO_INCREMENT PRIMARY KEY,
        info VARCHAR(255),
        date_ajout TIMESTAMP
    )";
    $dbcon->exec($sql);


} catch (PDOException $e) {
    echo $e ;
}


?>