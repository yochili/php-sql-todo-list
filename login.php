<?php
require "function/connectDB.php" ;
$error_message = "";
if (isset($_POST['user_name'])) {
    $uname = $_POST['user_name'] ;
    $upass = $_POST['user_pass'] ;

    $sql = "SELECT * FROM user WHERE (name='$uname' AND password='$upass')" ;
    $result = mysqli_query($con,$sql) ;
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['name'] = $uname ;
        $_SESSION['pass'] = $upass ;
        $user = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $user['id'] ;
        header('location: index.php') ;
    }else {
        $error_message = 'wrong password or identifiant connexion';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="wrapper">
        <div class="container-login">
            <h2>Login</h2>
            <span class="error"><?php echo $error_message;?></span>
            <form action="login.php" method="post" class="form-login">
                <div class="div-input">
                    <label for="user_name">UserName:</label><input type="text" name="user_name" id="user_name" autocomplete="off" require>
                </div>
                <div class="div-input">
                    <label for="user_pass">Password:</label><input type="password" name="user_pass" id="user_pass" autocomplete="off" require>
                </div>
                <div class="div-connect">
                    <button type="submit" class="btn-connect">Se connecter</button>
                </div>
                <div class="not-account">
                    <p>Pas encore de compte? <a href="sign-up.php">Créer</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>