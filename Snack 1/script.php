<?php

$matches = [
    [
        'home_team' => 'Olimpia Milano',
        'away_team' => 'Cantù',
        'home_point' => '55',
        'away_point' => '60',
    ],
    [
        'home_team' => 'Dinamo Sassari',
        'away_team' => 'Derthona',
        'home_point' => '62',
        'away_point' => '79',
    ],
    [
        'home_team' => 'Brescia',
        'away_team' => 'Reggiana',
        'home_point' => '86',
        'away_point' => '63',
    ],
    [
        'home_team' => 'Cremona',
        'away_team' => 'Napoli',
        'home_point' => '90',
        'away_point' => '83',
    ],
    [
        'home_team' => 'Virtus Bologna',
        'away_team' => 'Scafati',
        'home_point' => '94',
        'away_point' => '67',
    ],
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
        <li> <?php echo "{$matches[$i]['home_team']} - {$matches[$i]['away_team']}   |" ?> <?php echo "{$matches[$i]['home_point']}-{$matches[$i]['away_point']}" ?> </li>
        
         <?php } ?>
    </ul>
</body>
</html>