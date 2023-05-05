<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ---BOOTSTRAP---  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- ---FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>PHP OOP2</title>
</head>





<body>
    <?php
    include './db2.php';
    include './Views/partials/header.php';
    ?>


    <div class="container">
        <div class="row mt-4">
            <?php foreach ($products as $item) { ?>
                <div class="col-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item->getName(); ?></h5>
                            <p class="card-text">Brand: <?= $item->getBrand(); ?></p>
                            <p class="card-text">Price: €<?= $item->getPrice(); ?></p>
                            <i class="<?= $item->getIcon(); ?> mb-3"></i>

                            <?php
                            $class = get_class($item);
                            if ($class === 'Food') {
                                echo '<p class="card-text">Weight: ' . $item->getWeight() . 'gr</p>';
                            } elseif ($class === 'Toy') {
                                echo '<p class="card-text">Material: ' . $item->getMaterial() . '</p>';
                            } elseif ($class === 'Bed') {
                                echo '<p class="card-text">Size: ' . $item->getSize() . '</p>';
                            }
                            ?>

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
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>