<?php
    namespace Projeto\estacionamento\php;
    require_once('calculo.php');
 
    Use Projeto\estacionamento\php\calculo;
    Use estacionamento\php\ControllerDiaria;
 
   
    function calcularH($horas, $total)
    {
            if($horas > 60){
             return $total = 10 * $horas;
            }else{
               return $total = 5 * $horas;
            }
            echo $toal->imprimir();
    }
   /*
    echo "<br><br>O valor total é": .calcularH(10,12)
   */
?>
