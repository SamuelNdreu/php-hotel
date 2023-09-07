<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="./styles/style.css">

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Hotel Table Php</title>
</head>

<body>
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

                    //foreach($hotels as $key => $hotel){
                    //    echo "<div class='col-5 border border-secondary g-3 me-autod '>";
                    //    echo "<p>Nome: {$hotel['name']} </p>";
                     //   echo "<p>Descrizione: {$hotel['description']} </p>";
                    //    echo "<p>Parcheggio: {$hotel['parking']} </p>";
                    //    echo "<p>Voto: {$hotel['vote']} </p>";
                    //    echo "<p>Distanza dal centro: {$hotel['distance_to_center']}mt </p>";
                    //    echo "</div>";
                   // }



?>
<header>
    <h1 class="text-center">
        Hotels
    </h1>

    <hr>
</header>

        <!-- 
            $hotels = 
            [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ]-->
<main>

        <section class="form">
            <h2>
                Inserisci i dati:
            </h2>

            <!-- 1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio. -->

            <form action="index.php" method="GET">
                <label for="parking">Parcheggio: </label>
                <input id="parking" type="text" name="parking">
                <button type="submit">Invia</button>
            </form>
        </section>

        <section>
            <h2 class="text-center">
                Hotel disponibili:
            </h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody>

                <!-- 
            $hotels = 
            [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ]
        -->
                    <?php 
                        foreach($hotels as $hotel) {
                            echo "<tr>";
                            echo "<td>" . $hotel['name'] . "</td>";
                            echo "<td>" . $hotel['description'] . "</td>";
                            echo "<td>" . (($hotel['parking']) ? 'si' : 'no') . "</td>";
                            echo "<td>" . $hotel['vote'] . "</td>";
                            echo "<td>" . $hotel['distance_to_center'] . " km </td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>

        </section>
        

</body>

</html>