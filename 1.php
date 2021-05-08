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

        <h6 class="bg-dark text-white mt-3 p-2"> 1 - you have an array of numbers. write a script to find minimum and maximum numbers in the array. </h6>

        <?php
            $numArray = [4, 2, 5, 6, 9, 11, 23, 65, 20];
            $min = $numArray[0];
            $max = $numArray[0];
            for ($i = 1; $i < count($numArray); $i++) {
                if ($max < $numArray[$i]) { // 65 < 20
                    $max = $numArray[$i]; // 
                }
                if ($min > $numArray[$i]) { // 2 > 2
                    $min = $numArray[$i]; // 2 
                }
            }
            echo "max number $max and min number is $min ";
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>