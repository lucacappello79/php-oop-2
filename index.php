<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ---BOOTSTRAP---  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP OOP2</title>
</head>





<body>
    <?php
    include './db.php';
    include './Views/partials/header.php';
    ?>


    <div class="container">
        <div class="row mt-4">
            <?php foreach ($products as $item) { ?>
                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->getName(); ?></h5>
                            <p class="card-text">Type: <?= $item->type; ?></p>
                            <p class="card-text">Price: €<?= $item->getPrice(); ?></p>
                            <p class="card-text">Year: <?= $item->getYear() ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    <?php
    include './Views/partials/footer.php'
    ?>

    <!-- ---BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>