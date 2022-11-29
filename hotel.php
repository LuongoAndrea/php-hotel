<?php


$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
$lista = [];
$lista = $hotels;
if (isset($_GET['parcheggio']) && $_GET['parcheggio'] == '1') {
    $tempHotels = [];

    foreach ($lista as $hotel) {
        if ($hotel['parking']) {
            $tempHotels[] = $hotel;
        }
    }

    $lista = $tempHotels;
}

if (isset($_GET['voto']) && isset($_GET['votobox']) && $_GET['voto'] !== '' && $_GET['votobox'] == '1') {
    $tempHotels = [];

    foreach ($lista as $hotel) {
        if ($hotel['vote'] >= $_GET['voto']) {
            $tempHotels[] = $hotel;
        }
    }

    $lista = $tempHotels;
}

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($lista as $item) { ?>

            <div class="col-3 m-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $item['name'] ?>
                        </h5>

                        <p class="card-text">
                            <?php echo $item['description'] ?>
                        </p>

                        <span>
                            <?php echo 'distanza dal centro: ' . $item['distance_to_center'] . ' km' ?>
                        </span><br>
                        <span>
                            <?php echo 'voto: ' . $item['vote'] ?>
                        </span>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>

    </div>


</body>

</html>