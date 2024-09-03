<?php
    namespace Projeto\estacionamento\PHP;
    require_once('functionCalcular.php');
 
    Use Projeto\estacionamento\PHP\functionCalcular;
    Use estacionamento\PHP\ControllerDiaria;
 
   
    function calcularH($horas, $total)
    {
            if($horas > 60){
                return $total = 10 * $horas;
            }else{
                return $total = 5 * $horas;
            }
        echo $total;
    }
 
 
?>
