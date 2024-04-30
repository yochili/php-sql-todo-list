<?php  
$host = 'localhost' ;
$user = 'root' ;
$pass = '' ;
$db ='todolist' ;

$con = mysqli_connect($host,$user,$pass,$db) ;
if (!$con) {
    echo 'erreur de connexion a la base de donnée' . mysqli_connect_error() ;
}


?>