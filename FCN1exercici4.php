<?php
    function amagatall($final=10) {
        for ($cont=1 ; $cont<=$final; $cont++){
               if ($cont%2 == 0){
                    echo $cont . '<br>';
              }
            }
    }

    amagatall();
    
    ?>