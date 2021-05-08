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

        <h6 class="bg-dark text-white mt-3 p-2">5-write a script that removes any duplicates from an array.</h6>

        <?php
            $numbers  = [1, 5, 9, 6, 8, 10, 20, 5, 6, 1, 3, 50, 50, 30, 9, 61, 47];
            echo "<pre>";
            echo "Old Array <br>";
            print_r($numbers);
            echo "</pre>";
            
            
            $unique_array = [];
            
            foreach ($numbers as $current_value) {
                foreach ($unique_array as $old_value) {
                    if ($current_value === $old_value)
                    continue 2;
                }
                $unique_array[] = $current_value;
            }
            echo "<pre>";
            echo "New Array <br>";
            print_r($unique_array);
            echo "</pre>";
        ?>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>