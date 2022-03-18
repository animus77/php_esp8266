<?php

require '../vendor/autoload.php';
require '../config/database.php';
include '../resources/views/person.php';

use App\Models\Client;

$people = Client::get();

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
    <p>Nuevos datos</p>
    <ol>
        <li><a href="../resources/views/create_client.php">Crear cliente</a></li>
        <li><a href="#">Crear datos</a></li>
    </ol>
    
</body>
</html>
