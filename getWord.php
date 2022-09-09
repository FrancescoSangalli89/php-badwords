<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $getWord = $_POST['badWord'];

        $paragraph = "Canta, o dea, l'ira d'Achille Pelide, rovinosa, che infiniti dolori inflisse agli Achei, gettò in preda all'ade molte vite gagliarde d'eroi, ne fece il bottino dei cani";

        $censoredWord = str_replace($getWord, '***', $paragraph);

    ?>

    <p><?php echo $censoredWord?></p>
    <p>La lunghezza della stringa è: <?php echo strlen($censoredWord)?> caratteri</p>

</body>
</html>