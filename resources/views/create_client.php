<?php

include '../../vendor/autoload.php';
include '../../config/database.php';

use App\Models\Client;

$errors = [];
$saved = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $ref = intval($_POST['ref']);
    $address = $_POST['address'];
    $bottle = intval($_POST['bottle']);
    
    if($ref == 0){ 
        $errors[] = 'ref no es un numero';
    }
    
    if(empty($address)){ 
        $errors[] = 'direccion no puede estar vacio';
    }
    
    if($bottle == 0){ 
        $errors[] = 'envases no es un numero';
    }

    if(empty($errors)){
        $save = Client::create([
            'ref' => $_POST['ref'],
            'address' => $_POST['address'],
            'bottle' => $_POST['bottle']
        ]);

        if($save){
            header('Location:/php_esp8266/resources/views/create_client.php?value=1');
        }
    }

}

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
    <main>
        <section>
            <?php
                foreach($errors as $error){
                    echo $error . "<br>";
                }

                if($saved){
                    echo "Registro guardado";
                }
            ?>
        </section>
        <section>
            <form action="" method="post">
                <label for="">Referencia</label>
                <input type="text" name="ref">
    
                <label for="">Direccion</label>
                <input type="text" name="address">
    
                <label for="">Garrafones</label>
                <input type="number" name="bottle">
    
                <input type="submit">
            </form>
        </section>

    </main>
    
</body>
</html>