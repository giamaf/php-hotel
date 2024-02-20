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
                        <td><?= $hotel['parking'] ?></td>
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