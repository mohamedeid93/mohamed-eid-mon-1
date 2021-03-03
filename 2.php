<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid py-3">

        <h6 class="bg-dark text-white mt-3 p-2"> 2 - you have a variable that contains any digit from 0 to 9. write a script to display the english equivalent of this number. For example: digit = 3 → three </h6>

        <?php
            $digit = 5;
            $msg = match ($digit) {
                0       =>  "Digit = $digit → Zero",
                1       =>  "Digit = $digit → One",
                2       =>  "Digit = $digit → Two",
                3       =>  "Digit = $digit → three",
                4       =>  "Digit = $digit → Four",
                5       =>  "Digit = $digit → Five",
                6       =>  "Digit = $digit → Six",
                7       =>  "Digit = $digit → Seven",
                8       =>  "Digit = $digit → Egiht",
                9       =>  "Digit = $digit → Nine",
            };
            echo "$msg ";
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>