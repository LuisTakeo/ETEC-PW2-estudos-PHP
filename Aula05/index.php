<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>
        <?php

            $vetor = Array();
            array_push($vetor, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

            // echo count($vetor) . "<br>";

            function par($numero) {
                return $numero % 2 == 0;
            }
            function impar($numero) {
                return $numero % 2 != 0;
            }

            function somaValores($acumulador, $valor) {
                $acumulador += $valor;
                return $acumulador;
            }
            

            $valoresPares = array_filter($vetor, "par");
            $somaPares = array_reduce($valoresPares, "somaValores");
            
            $valoresImpares = array_filter($vetor, "impar");
            $somaImpares = array_reduce($valoresImpares, "somaValores");

            echo "Pares: <br>";
            foreach($valoresPares as $valor){
                echo "$valor <br>";
            }
            echo "Somatória pares: $somaPares <br><br>";

            echo "Impares: <br>";
            foreach($valoresImpares as $valor){
                echo "$valor <br>";
            }
            echo "Somatória impares: $somaImpares <br>";


        ?>
    
    </p>
    
    
</body>
</html>