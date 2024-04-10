<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os valores de A (valor inicial) e R (razão)
    $valor_inicial = $_POST["valor_inicial"];
    $razao = $_POST["razao"];

    // Imprimir os 10 primeiros valores da sequência em P.A.
    echo "<h3>Os 10 primeiros valores da sequência em P.A. são:</h3>";
    for ($i = 0; $i < 10; $i++) {
        $termo = $valor_inicial + $razao * $i;
        echo "$termo ";
    }
}

?>
