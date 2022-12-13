<?php
require_once __DIR__ . "/Database/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row row-cols-4">
            <?php foreach ($products as $product) { ?>
                <div class="col">
                    <div class="card">
                        <div class="car-body">
                            <h5 class="card-title"><?php echo $product->name ?></h5>
                            <p class="card-text">€<?php echo $product->price ?></p>
                            <p class="card-text"><?php echo $product->getDetails() ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>