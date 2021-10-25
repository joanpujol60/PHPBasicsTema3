<?php
    $import = 0;
    $preu = 0;
    function llaminadures($quantitat, $article) {
      switch ($article){
        case 'xocolata':
          $preu = $quantitat * 1;
          break;
      
        case 'xiclets':  
          $preu = $quantitat * 0.5;
          break;
      
        case 'caramels':
          $preu = $quantitat * 1.5;    
          break;
      }
      return $preu;
            
    }
 
    $preu = llaminadures(8,"caramels");
    $import = $import + $preu;
    $preu = llaminadures(5,"xiclets");
    $import = $import + $preu;
    $preu = llaminadures(5,"xocolata");
    $import = $import + $preu;

    echo "import total : " . $import;
    
    ?>