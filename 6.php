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

        <h6 class="bg-dark text-white mt-3 p-2">6- you have array of developers data:</h6>
        
        <?php

            $developersData = [
                [
                    'name' => 'ahmed hamdy',
                    'job' => 'front-end',
                    'experience' => 3
                ],
                [
                    'name' => 'mohammed shaker',
                    'job' => 'back-end',
                    'experience' => 2
                ],
                [
                    'name' => 'ali hasan',
                    'job' => 'full-stack',
                    'experience' => 4
                ],
            ];

        ?>

        <div class="row">
            <?php foreach ($developersData as $developer) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $developer['name'] ?>
                            </h5>
                            <p><?= $developer['job'] ?></p>
                            <p><?= $developer['experience'] . " Years Of Experience" ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>