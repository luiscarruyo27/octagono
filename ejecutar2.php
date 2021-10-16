<?php
    $Ap = $_POST['Ap'];
    $log = $_POST['log'];
    $resultado = null;
    $texto = 'El area de octagono regular es: ';

   if (!empty($Ap) && !empty($log)){
      $resultado = 4 * $log * $Ap;
      echo "El valor de la logitud es : $log",'<br>';
      echo "El valor d la apotema es : $Ap" ,'<br>','<br>';
      echo "$texto $resultado";
  
    }else{
      echo 'No puede dejar los campos vacios';
   }

?>