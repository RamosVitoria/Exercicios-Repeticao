<?php


    // Receber os valores de "a" e "n" do formulário
    $a = $_POST["a"];
    $n = $_POST["n"];

    // Inicializar a variável para armazenar a soma
    $soma = 0;

    // Loop de "a" até "n"
    for ($i = $a; $i <= $n; $i++) {
        // Verificar se o número é ímpar e múltiplo de três
        if ($i % 2 != 0 && $i % 3 == 0) {
            // Adicionar o número à soma
            $soma += $i;
        }
    }
    // Exibir o resultado da soma
    echo "<h3>A soma de todos os números ímpares que são múltiplos de três no intervalo de $a a $n é: $soma</h3>";


?>
