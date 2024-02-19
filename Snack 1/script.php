<?php

$matches = [
    'Olimpia Milano - Cantù | 55-60',
    'Dinamo Sassari - Derthona | 62-79',
    'Cremona - Napoli | 90-83',
    'Brescia - Reggiana | 86-63',
    'Virtus Bologna - Scafati | 94-67'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <h1> Partite Giornata 1</h1>
    <ul>
        <?php for($i = 0; $i < count($matches); $i++) { ?>
        <li> <?php echo $matches[$i] ?></li>
        
         <?php } ?>
    </ul>
</body>
</html>