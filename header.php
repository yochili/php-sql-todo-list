<?php  
require 'function/session.php';
global $btn1,$btn2,$btn3;
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

    <header>
        <h2>Hello <span id="name"><?php echo $_SESSION['name'] ?></span></h2>
        <nav>
            <form action="index.php" method="post"><button type="submit" name="all" <?php echo ($btn1) ? "class='selected'" : "";?> >All</button></form>
            <form action="index.php" method="post"><button type="submit" name="unfinished" <?php echo ($btn2) ? "class='selected'" : "";?>>unfinished</button></form>
            <form action="index.php" method="post"><button type="submit" name="finished" <?php echo ($btn3) ? "class='selected'" : "";?>>finished</button></form>
            <a href="function/logout.php" class="logout">Logout</a>
        </nav>
    </header>
