<?php  
require 'function/session.php';
require 'function/connectDB.php';

$id = $_SESSION['id'] ;
$TDL1 = false ;
$TDL2 = false ;
if (isset($_POST['finished'])) {
    $btn3 = true;
    $sql = "SELECT * FROM tache WHERE finished=TRUE AND id_user = '$id'";
    $result = mysqli_query($con,$sql);
    $TDL1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
}elseif (isset($_POST['unfinished'])) {
    $btn2 = true;
    $sql = "SELECT * FROM tache WHERE finished=FALSE AND id_user = '$id'";
    $result = mysqli_query($con,$sql);
    $TDL2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
}else {
    $btn1 = true;
    $sql = "SELECT * FROM tache WHERE finished=TRUE AND id_user = '$id'";
    $result = mysqli_query($con,$sql);
    $TDL1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $sql = "SELECT * FROM tache WHERE finished=FALSE AND id_user = '$id'";
    $result = mysqli_query($con,$sql);
    $TDL2 = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $sql = "SELECT * FROM tache WHERE id_user = '$id' ";
}



mysqli_free_result($result);
mysqli_close($con);
require 'header.php';
?>


<div class="container-flex">
    <div class="container-main">
        <form action="function/save.php" method="post" class="form-add">
            <input type="text" name="add" placeholder="add your task here"><button type="submit" class="add">add</button>
        </form>

        <ul>
            <?php if ($TDL1): ?>
                <?php foreach ($TDL1 as $tache) { ?>
                    <li class='finished'>
                        <h3><?php echo htmlspecialchars($tache['info']); ?></h3>
                        <div class="div-buttons">
                            <form action="function/delete.php" method="post">
                                <?php echo "<button name='delete' type='submit' value='" .$tache['id']. "'>delete</button>" ?>           
                            </form>
                            <form action="function/end.php" method="post">
                                <?php echo "<button name='end' type='submit' value='" .$tache['id']. "'>end</button>" ?>           
                            </form>
                        </div>
                    </li>
                <?php } ?>
            <?php endif ?>
            <?php if ($TDL2): ?>
                <?php foreach ($TDL2 as $tache) { ?>
                    <li class='unfinished'>
                        <h3><?php echo htmlspecialchars($tache['info']); ?></h3>
                        <div class="div-buttons">
                            <form action="function/delete.php" method="post">
                                <?php echo "<button name='delete' type='submit' value='" .$tache['id']. "'>delete</button>" ?>           
                            </form>
                            <form action="function/end.php" method="post">
                                <?php echo "<button name='end' type='submit' value='" .$tache['id']. "'>end</button>" ?>           
                            </form>
                        </div>
                    </li>
                <?php } ?>
            <?php endif ?>
        </ul>

    </div>
</div>



<script type="module" src="script.js"></script>
</body>
</html>