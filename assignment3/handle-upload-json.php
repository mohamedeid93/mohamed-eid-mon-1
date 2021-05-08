<?php

session_start();

if (isset($_POST['submit'])) {

    // Get File Details 
    $file =         $_FILES['file'];

    $fileName =     $file['name'];
    $fileType =     $file['type'];
    $fileTmpName =  $file['tmp_name'];
    $fileError =    $file['error'];
    $fileSize =     $file['size']; // size byte
    $fileExt =      pathinfo($fileName, PATHINFO_EXTENSION);

    // validate
    $errors = [];
    if ($fileError != 0) {
        $errors[] = "Upload error";
    } elseif ($fileExt != "json") {
        $errors[] = "file ext must be .json";
    }

    if (empty($errors)) {
        $_SESSION['msg'] = "done file uploaded <br> ";

        // Rename File
        // $str = uniqid();
        // $fileNewName = "$str.$fileExt";

        // Move File
        move_uploaded_file($fileTmpName, "upload/$fileName");

        // Open and read Json File 
        $jsonOpenFile = fopen($fileName, 'r');
        // $jsonFileSize = filesize($fileName);
        $jsonReadFile = fread($jsonOpenFile, filesize($fileName));
        $newArr = json_decode($jsonReadFile, true);
        $_SESSION['arr'] = $newArr;


        header("location: display.php");
    } else {
        $_SESSION['errors'] = $errors;
        header("location: upload-json.php");
    }
}
