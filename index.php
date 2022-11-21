<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "get" action="imc.php" ></form>
    <?php
    $peso = $_REQUEST["peso"];
    $altura = $_REQUEST[$altura];

    $imc = $peso / pow($altura, 2);

    $resultado = [
        "status" => "Sucesso",
        "imc" => $imc
    ];
    ?>
    <?php
        function imc($peso, $altura){
            return $peso / pow($altura);
        }
        ?>
        Valor IMC:
    <?php

    include "header.php"
    try {
        $valor[0] = 1;
        $valor["novo"] = 2;

        echo $valor[0];
        echo "<br/>"/
        echo $valor["novo"];

        foreach($valor as $key => $value){
            echo "Chave " . $key . ",valor " . $value;
        }
        
    }
    catch(Exception $e){
        print_r($e);
    }
    ?>

        $numero = 1;
        for($i=0; $numero < 7; $numero++){
            print($numero);
        }
        echo "Exemplo página PHP feito pelo PHP";
    ?>    
Exemplo pagina php
</body>
</html>