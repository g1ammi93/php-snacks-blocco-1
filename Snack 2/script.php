<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>


<body>

<?php
    if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
        if (strlen($name) > 3 && str_contains($mail, '@') && str_contains($mail, '.') && is_numeric($age)) {
            echo "<p>Accesso riuscito</p>";
        } else {
            echo "<p>Accesso negato</p>";
        }
    } if(empty($name) || empty($mail) || empty($age)) {
        echo "<p>Per favore inserisci i campi correttamente</p>";
    }
?>

</body>
</html>