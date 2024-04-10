<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os valores de "a" e "n" do formulário
    $a = $_POST["a"];
    $n = $_POST["n"];

    // Função para calcular a^n
    function calcularAN($a, $n) {
        return pow($a, $n);
    }

    // Calcula a^n
    $resultado = calcularAN($a, $n);

    // Exibe o resultado
    echo "<h2>O valor de a^n é: $resultado</h2>";
}

?>
