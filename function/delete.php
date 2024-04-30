<?php 
require 'connectDB.php';

if (isset($_POST["delete"])) {
    if (!empty($_POST["delete"])) {
        $delete = $_POST["delete"];
        $sql = "DELETE FROM tache WHERE id='$delete' " ;
        if (mysqli_query($con,$sql)) {
            header('location: ../index.php');
        }
    }else {
        echo "id of the element to delete is empty" ;
    }
}else {
    echo "id of the element to delete is not set" ;
}

mysqli_close($con);
?>