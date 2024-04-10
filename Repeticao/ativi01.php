<html>
    <body>
    <table border="1">
        <?php

        for ($i = 200; $i >= 0; $i--){
            if ($i % 2 ==0){
                echo "<tr><td> $i </td> </tr>";
            }
        }
        ?>
        </table>
       </body>
    </html>