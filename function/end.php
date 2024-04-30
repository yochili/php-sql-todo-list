<?php
require 'connectDB.php';

$id_end = $_POST['end'];
$sql = "UPDATE tache SET finished=TRUE WHERE id='$id_end'" ;

if (mysqli_query($con,$sql)) {
    header('location: ../index.php') ;
}

mysqli_close($con);
?>           