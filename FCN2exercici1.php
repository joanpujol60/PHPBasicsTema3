<?php
    function anysOlimpics() {
        for ($cont=1960 ; $cont<=2016; $cont++){
               if ($cont%4 == 0){
                    echo $cont . " va ésser any olímpic" . '<br>';
              }
            }
    }

    anysOlimpics();
    
    ?>