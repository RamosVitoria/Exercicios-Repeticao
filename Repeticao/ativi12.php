<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os valores de início e fim do intervalo
    $inicio = $_POST["inicio"];
    $fim = $_POST["fim"];

    // Inicializar contadores
    $pares = 0;
    $impares = 0;
    $multiplos_de_3 = 0;

    // Loop para percorrer o intervalo e contar os valores
    for ($i = $inicio; $i <= $fim; $i++) {
        if ($i % 2 == 0) {
            // Valor par
            $pares++;
        } else {
            // Valor ímpar
            $impares++;
        }

        if ($i % 3 == 0) {
            // Múltiplo de 3
            $multiplos_de_3++;
        }
    }

    // Exibir os resultados
    echo "<h3>Resultados:</h3>";
    echo "Quantidade de valores pares: $pares<br>";
    echo "Quantidade de valores ímpares: $impares<br>";
    echo "Quantidade de múltiplos de 3: $multiplos_de_3";
}

?>
