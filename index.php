<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60


Snack 2
Passare come parametri GET name, mail e age e 
verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!-- Snack 1  -->
<?php
    // array di partite 
    $partite = [
        [
            'casa' => 'Olimpia Milano',
            'punti_casa' => '55',
            'ospite' => 'Cantù',
            'punti_ospite' => '60'
        ],
        [
            'casa' => 'Virtus Bologna',
            'punti_casa' => '70',
            'ospite' => 'Trieste',
            'punti_ospite' => '65'
        ],
        [
            'casa' => 'Venezia',
            'punti_casa' => '53',
            'ospite' => 'VL Pesaro',
            'punti_ospite' => '74'
        ],
        [
            'casa' => 'Reggiana',
            'punti_casa' => '89',
            'ospite' => 'Brescia',
            'punti_ospite' => '76'
        ]
        ];
    // var_dump($partite);

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>

<h2>Risultati 10a giornata:</h2>
<ul>
    <?php for($i = 0; $i < count($partite); $i++) { ?>
    <!-- con il ciclo for ottengo ogni singolo match contenuto nell'array  -->
        <?php $thismatch = $partite[$i];?>
        <?php //var_dump($thismatch);?>

        <li><?php echo $thismatch['casa']?> - <?php echo $thismatch['ospite']?> | <?php echo $thismatch['punti_casa']?>-<?php echo $thismatch['punti_ospite']?></li>
    <?php }?>
</ul>
    
</body>
</html>
<!-- End Snack 1  -->