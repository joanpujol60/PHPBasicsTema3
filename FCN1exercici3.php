<?php
    function amagatall($final) {
        for ($cont=1 ; $cont<=$final; $cont++){
               if ($cont%2 == 0){
                    echo $cont . '<br>';
              }
            }
    }

    amagatall(16);
    
    ?>