<?php

    if(!isset($_SESSION)){
        SESSION_start();
    }
    


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site.css">
    <title>Pagina inicial</title>
</head>
<body>
    <div class="background">
        <div class="cube">
            <div class="top"></div>
            <div>
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>
        </div><!--cube-->
    </div><!--background-->
</body>
</html>