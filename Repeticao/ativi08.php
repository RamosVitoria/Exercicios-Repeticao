<html>

<body>
    <table border='1'>
        <?php

        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $maior = "";
        $media = ($nota1 + $nota2 + $nota3) /3;
        if($nota1 > $nota2  && $nota1 > $nota3){
            $maior = $nota1;
            echo "<tr><td> A maior nota é $maior </td> </tr>";
        }else if($nota2 > $nota1 && $nota2 > $nota3){
            $maior = $nota2;
            echo "<tr><td> A maior nota é $maior </td> </tr>";
        }else {
            $maior = $nota3;
            echo "<tr><td> A maior nota é $maior </td> </tr>";
        }
        echo "<tr><td> A média das notas é $media </td> </tr>";
        ?>