<?php
    function trucada($durada) {
      if ($durada <= 3){
        echo "La trucada té un cost de 10 centims" ;
      }else{
        echo "La trucada té un cost de " . 10 + ($durada - 3) * 5 . " centims" ;
      }
            
    }

    trucada(8);
    
    ?>