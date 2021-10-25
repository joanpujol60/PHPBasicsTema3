<?php
    function alumne($nota) {
      if ($nota > 59){
        echo "Primera Divisió";
      }elseif
        ($nota > 44){
          echo "Segona Divisió";
        }elseif
          ($nota > 32){
            echo "Tercera Divisió";
          }else{
            echo "Reprovat";
          }
      }
    
    echo '<br>' . "alumne de 60 : ";
    alumne(60);
    echo '<br>' . "alumne de 42 : ";
    alumne(42);
    echo '<br>' . "alumne de 54 : ";
    alumne(54);
    echo '<br>' . "alumne de 29 : ";
    alumne(29);
    
    ?>