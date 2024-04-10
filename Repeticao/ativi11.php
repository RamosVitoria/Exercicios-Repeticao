<?php

// Inicializa a variável para armazenar a soma
$soma = 0;

// Loop de 1 a 500
for ($i = 1; $i <= 500; $i++) {
    // Verifica se o número é ímpar e múltiplo de três
    if ($i % 2 != 0 && $i % 3 == 0) {
        // Adiciona o número à soma
        $soma += $i;
    }
}

// Exibe o resultado da soma
echo "<h3>A soma de todos os números ímpares que são múltiplos de três no intervalo de 1 até 500 é: $soma</h3>";

?>
