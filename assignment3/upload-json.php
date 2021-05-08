<?php require_once "inc/header.php";

    session_start();

    if (isset($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $errors) {
            echo "$errors <br>";
        }
    }

    unset($_SESSION['errors']);
?>

<div class="container-fluid py-3">

    <form action="handle-upload-json.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" class="form-control mb-3">
        <input type="submit" name="submit" value="submit" class="btn btn-info">
    </form>

</div>


<?php require_once "inc/footer.php" ?>