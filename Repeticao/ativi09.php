<html>
  <body>
  
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $par = 0;
    $impar = 0;
    
    for ($i = $num1; $i <= $num2; $i++){
         if ($i % 2 == 0){
        $par = $par + 1;  
         }else{
        $impar = $impar + 1; 
         }
    }
    echo "A quantidade de números pares é $par";
    echo "</br>";
    echo "A quantidade de números impares é $impar"
?>



    </body>
      </html>