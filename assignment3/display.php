<?php 
    require_once "inc/header.php";
    session_start();
?>

<div class="container-fluid py-3">

    <?php
        if (isset($_SESSION['arr'])) { ?>
            <ul>
                <li>name : <?= $_SESSION['arr']['name'] ?> </li>
                <li>description: <?= $_SESSION['arr']['description'] ?> </li>
                <li>created_by: <?= $_SESSION['arr']['created_by'] ?> </li>
                <li>created_at: <?= $_SESSION['arr']['created_at'] ?> </li>
            </ul>
    <?php }?>

</div>

<?php require_once "inc/footer.php" ?>