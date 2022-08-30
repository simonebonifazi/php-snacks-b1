<!-- traccia first snack

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->
<!-- BASKET
ITALIA
Lega A
2022/2023

-->
<?php
$basket_calendar = [
    [
        "home" => "Basket Napoli",
        "away" => "Virtus Bologna",
        "score" => "56 - 64",
    ],
    [
        "home" => "Olimpia Milano",
        "away" => "Brescia",
        "score" => "82 - 81",
    ],
    [
        "home" => "Tortona",
        "away" => "Trento",
        "score" => "67 - 74",
    ],
    [
        "home" => "Trieste",
        "away" => "Pesaro",
        "score" => "55 - 45",
    ],
    [
        "home" => "Treviso",
        "away" => "Reggiana",
        "score" => "68 - 84",
    ],
    [
        "home" => "Varese",
        "away" => "Sassari",
        "score" => "77 - 52",
    ],
    [
        "home" => "Venezia",
        "away" => "Scafati",
        "score" => "84 - 74",
    ],
    [
        "home" => "Verona",
        "away" => "Brindisi",
        "score" => "66 - 54",
    ],
   
    
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lega A ITA</title>
</head>
<body>
    <h1> RISULTATI PRIMA GIORNATA LEGA A</h1>

    <ol>
        <?php for($i = 0; $i <= count($basket_calendar)-1; $i++) : ?>
            <li> <?php echo $basket_calendar[$i]['home'] ?> vs <?php echo $basket_calendar[$i]['away'] ?> | <?php echo $basket_calendar[$i]['score'] ?> </li>
        <?php endfor?>
    </ol>
</body>
</html>