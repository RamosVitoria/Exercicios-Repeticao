<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber a massa inicial do formulário
    $massa_inicial = $_POST["massa_inicial"];

    // Definir a massa limite
    $massa_limite = 0.5;

    // Inicializar o tempo decorrido
    $tempo_decorrido = 0;

    // Calcular o tempo necessário para que a massa se torne menor que 0,5 gramas
    while ($massa_inicial > $massa_limite) {
        $massa_inicial /= 2; // Perde metade da massa a cada 50 segundos
        $tempo_decorrido += 50; // Incrementa o tempo em 50 segundos
    }

    // Converter o tempo decorrido para horas, minutos e segundos
    $horas = floor($tempo_decorrido / 3600);
    $minutos = floor(($tempo_decorrido % 3600) / 60);
    $segundos = $tempo_decorrido % 60;

    // Exibir os resultados
    echo "<h3>Resultados:</h3>";
    echo "Massa Inicial: $massa_inicial gramas<br>";
    echo "Massa Final: $massa_limite gramas<br>";
    echo "Tempo Calculado: $horas horas, $minutos minutos e $segundos segundos";
}

?>
