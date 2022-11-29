<?php

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
        <div class="row ">
            <form action="hotel.php" class="d-flex">
                <div class="col-3 p-4">
                    <input class="form-check-input me-1" type="checkbox" name="parcheggio" value="1" id="firstRadio"
                        checked>
                    <label class="form-check-label" for="firstRadio">Hotel con Pargheggio</label>
                </div>
                <div class="col-3 p-4">
                    <input class="form-check-input me-1" type="checkbox" name="votobox" value="1" id="secondRadio"
                        checked>
                    <label for="customRange2" class="">voto:</label>
                    <input type="range" class="form-range" min="0" max="5" name="voto" id="customRange2">
                </div>
                <div class="col-auto p-4">
                    <button type="submit" class="btn btn-primary mb-3">Vedi Hotel</button>
                </div>
            </form>
        </div>


    </div>


</body>

</html>