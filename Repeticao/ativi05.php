<html>
    <body>
        <table border='1'>
        <?php
$n = $_POST["num1"];
$m = $_POST["num2"];
function mostrarNumerosNoIntervalo($n, $m) {
    // Verificar se $n é menor ou igual a $m
    if ($n <= $m) {
        // Loop de $n até $m, mostrando cada número
        for ($i = $n; $i <= $m; $i++) {
            echo $i . " ";
        }
    } else {
        // Loop de $m até $n, mostrando cada número
        for ($i = $m; $i <= $n; $i++) {
            echo $i . " ";
        }
    }
}

// Chamar a função para mostrar os números no intervalo
mostrarNumerosNoIntervalo($n, $m);

?>

        </table>
    </body>
</html>        