<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>

<body>

    <!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

    <?php
    $matches = [
        [
            'Home Team' => 'Pelicans',
            'Visiting Team' => 'Lakers',
            'Home Points Made' => 98,
            'Visiting Points Made' => 110,
        ],
        [
            'Home Team' => 'Thunder',
            'Visiting Team' => 'Clippers',
            'Home Points Made' => 117,
            'Visiting Points Made' => 112,
        ],
        [
            'Home Team' => 'Timberwolves',
            'Visiting Team' => 'Mavericks',
            'Home Points Made' => 136,
            'Visiting Points Made' => 121,
        ],
        [
            'Home Team' => 'Blazers',
            'Visiting Team' => 'Nuggets',
            'Home Points Made' => 132,
            'Visiting Points Made' => 116,
        ],
    ];
    ?>

    <h1>NBA Regular Season</h1>
    <?php for ($i = 0; $i < count($matches); $i++) { ?>
        <ul>
            <li>
                <?php echo $matches[$i]['Home Team'] ?> - <?php echo $matches[$i]['Visiting Team'] ?> | <?php echo $matches[$i]['Home Points Made'] ?>-<?php echo $matches[$i]['Visiting Points Made'] ?>
            </li>
        </ul>
    <?php } ?>

    <!-- PHP Snack 2:
Passare come parametri GET (query string) name, mail e age
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri
2. che mail contenga un punto e una chiocciola
3. che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

    <?php
    // Name
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if ((empty($name)) || (empty($mail)) || (empty($age))) {
        echo 'Errore, nessun parametro';
    } else if ((strlen($name) > 3) === false || (strpos($mail, '@') === false || strpos($mail, '.') === false || (is_numeric($age))  === false)) {
        echo 'Accesso negato';
    } else {
        echo 'Accesso riuscito';
    }

    ?>


</body>

</html>