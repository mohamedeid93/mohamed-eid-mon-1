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

        <h6 class = "bg-dark text-white mt-3 p-2">4- write a script to draw the multiplication table</h6>
        
        <table class="responsive-table table table-bordered table-striped">
            <tbody>
                <?php
                for ($x = 1; $x <= 10; $x++) { ?>
                    <tr>
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            $mult = $x * $i;
                            echo "<td> $x * $i = $mult</td>";
                        }
                        ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>