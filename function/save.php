<?php  
require 'connectDB.php';
require 'session.php';

$tache = mysqli_real_escape_string($con,$_POST["add"]) ;
$id = $_SESSION['id'];
if (isset($_POST["add"])) {
    if (empty($_POST["add"])) {
        echo 'tache vide';
    }else {
        $sql = "INSERT INTO tache(info,id_user) VALUES ('$tache','$id')" ;
        if ($exec = mysqli_query($con,$sql)) {
            header('location: ../index.php');
        }
    }
}else {
    echo 'valeur non recu';
}
// INSERT INTO `tache` (`id`, `info`, `date_ajout`) VALUES (NULL, 'crerr un AMV1', current_timestamp());

mysqli_close($con);
?>