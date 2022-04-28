<?php
    function SeculoAno($ano) {
        
        return 'Século'. ' '.floor($ano/100) + (($ano%100 ? 1 : $ano) % 10 ? 1 : 0);
      

    }  

   
echo SeculoAno(1905); 
echo SeculoAno(1700);


?>

