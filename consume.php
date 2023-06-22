<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Canales de Televisión</title>
    </head>
    <body>
        <?php
            //Vuelve el archivo JSON en un objeto de PHP 
            $data = json_decode(file_get_contents("https://bit.ly/419cYxS"), true );
            print_r($data);

            for ( $i = 0; $i<count($data); $i++){
                echo $data [$i]["Array"]."<br>";
            }
         ?>
    </body>
    </html>


