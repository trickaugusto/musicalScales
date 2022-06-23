<?php

require __DIR__ . '/vendor/autoload.php';

use Musical\Scales;

/*echo "Escolha a nota desejada: ";
$note = trim(strtoupper(fgets(STDIN)));

$scales = new Scales($note);

$result = $scales->returnScale();

if(!$result){
    echo "Mula, você não serve pra ser músico";
} else {
    echo $result;
}
*/


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Escolher escala</title>
</head>

<body>
    <div id="container">
        <h1>Escolher escala</h1>
        <form action="escala.php" method="get">
            <p>
                <label for="">Digite a nota desejada</label>
                <input class="campo-form" type="text" name="note" id="titulo" />
            </p>
            <p>
                <button class="botao">Gerar escala</button>
            </p>
        </form>
    </div>
</body>

</html>