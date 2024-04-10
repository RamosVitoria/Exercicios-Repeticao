<html>
    <body>
        <table border="1">

        <?php

        for ($i = 1; $i <= 200; $i++){
            if ($i %3== 0 || $i %5== 0){
                echo "<tr><td> $i </td> </tr>";
            }
        }
        ?>
        
          </table>
       </body>
    </html>