<?php

$title = "Nuova Husqvarna Norden 901";

$text = "La Norden 901 è una moto da Touring adventure eccezionale. Spinta da un fluido e potente bicilindrico parallelo da 889 cm³ da 105 CV alloggiato in un telaio a traliccio in acciaio, alla Norden 901 non manca nulla per i lunghi viaggi. Sospensioni pronte all’offroad con escursioni generose ti faranno superare qualsiasi terreno che troverai di fronte a te e l’ergonomia confortevole renderà ogni viaggio una piacevole avventura, non un percorso a ostacoli. Esplora il mondo come preferisci con la nuova Norden 901.";

var_dump($title, $text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 class="title">
        <?php echo $title ?>
    </h1>

    <p class="content">
        <b>Presentazione:</b>
        <?php echo $text ?>
    </p>

    <div class="text_lenght">
        <b>Numero di caratteri del testo:</b>
        <?php echo mb_strlen($text) ?>
        /
        <?php echo strlen($text) ?>
    </div>
    
</body>
</html>