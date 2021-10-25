<?php
    function criba($num){
   //Criba de Eratóstenes
   //Primera llista de tots els numeros
   for($i=2;$i<=$num;$i++)
   {
     $numeros[$i]=true;
   }
   
   //El 2 es el primer nombre primer
   $numeros[2]=true;
   
   //Recorrem els numeros
   for ($n=2;$n<=$num;$n++)
   {
     //Si es primer marquem com no primer els multiples
     if ($numeros[$n])
     {
       for ($i=$n*$n;$i<=$num;$i+=$n)
       {
          $numeros[$i] = false;
       }
     }
   }
   
   //Ensenyem la llista 
   echo "Primers: ";
   for ($n = 2; $n <= $num; $n++)
   {
     if ($numeros[$n])
     {
       echo $n." ";
     }
   }
}
    criba(250);
    
    ?>
