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

        <h6 class="bg-dark text-white mt-3 p-2">7-trace the code & discuss of each statement of value of x and y:</h6>

        <?php
            $x = 3;
            $y = $x++; //  x = 4  y = 3
            $y += ++$x; // x = 5  y = 3 + 5 = 8

            if ($y == 7) {
                $x++;
                echo $x . "<br>";
            } else if ($y == 8) {
                $x--; // 4
                echo $x . "<br>";
            } else if ($y == 9) {
                $x += 2;
                echo $x . "<br>";
            } else {
                $x = 0;
                echo $x . "<br>";
            }
        ?>



    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>