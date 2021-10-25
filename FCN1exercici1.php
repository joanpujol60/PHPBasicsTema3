<?php
    function edat($edat) {
        // resto del rebut
        $resto = $edat%2;
        if ($resto==0){
            $resultat = "Parell";
        }else{
            $resultat = "Senar";
        }
        echo "Edat és : " . $edat . " i és " . $resultat . '<br>';
        return $resultat;
    }

    edat(53);
    edat(40);
    edat(12);
    edat(37);
    
    ?>