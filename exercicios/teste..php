<?php

    //Minhas primeiras  linhas de PHP, Aeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee!
    echo "<h2 align = center> 
      O meu programa esta rodando no meu servior PHP!
    </h2>";
    
    // imprimindo um vetor usando var_dump, toda variavel começa com um "$"
    //Ele vai mostrar as informações de cada vetor, strig, e quant de espaço
    //var_dump, ele vai indetificar algum erro, e a posição do erro.
    
    $vetor = array ('Tartaruga', 'Peixe', 'Baleia Azul',2026);
    var_dump($vetor)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML + PHP</title>
</head>
<body>
    <?php
        //Definindo um fuso horario
        date_default_timezone_set('America/Sao_Paulo');
        $date_hoje = date("d/m/y", time());
    ?>

    <p align="center"> Hoje é dia <?php echo $date_hoje ?> </p>

</body>
</html>