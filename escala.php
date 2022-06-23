<?php

require __DIR__ . '/vendor/autoload.php';
require 'src/redirect.php';

use Musical\Scales;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $note = trim(strtoupper($_GET['note']));
    $scales = new Scales($note);
    
    $result = $scales->returnScale();
    
    if(!$result) redirect('index.php'); 

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Escala de <?php echo strtoupper($_GET['note'])?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Escala de <?php echo strtoupper($_GET['note'])?></h1>
        <p>
            <?php echo nl2br($result); ?>
        </p>

        <div>
            <a class="botao botao-block" href="index.php">Voltar</a>
        </div>
    </div>
</body>

</html>