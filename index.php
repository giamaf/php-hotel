<?php
include 'data/hotels_data.php';

// Label pagina
$page_label = 'PHP Hotel';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />

    <!-- Fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css'
        integrity='sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ=='
        crossorigin='anonymous' />

    <title><?= $page_label ?></title>
</head>

<body>
    <header class="text-center">
        <h1 class="my-3"><?= $page_label ?></h1>
    </header>

    <main class="my-3">
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <?php foreach ($hotels[0] as $title => $info ): ?>

                        <th scope="col"><?= $title ?></th>

                        <?php endforeach ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hotels as $hotel ): ?>

                    <tr>
                        <th scope="row"><?= $hotel['name'] ?></th>
                        <td><?= $hotel['description'] ?></td>
                        <?php if($hotel['parking']): ?>

                        <td><i class="fa-regular fa-circle-check"></i></td>
                        <?php else: ?>
                        <td><i class="fa-regular fa-circle-xmark"></i></td>
                        <?php endif ?>
                        <td><?= $hotel['vote'] ?></td>
                        <td><?= $hotel['distance_to_center'] ?></td>
                    </tr>


                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </main>
</body>

</html>