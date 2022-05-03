<?php
    $numero1 = 20;
    $numero2 = 39;
    $operacao = "+";

                function subtracao ($arg1, $arg2) {
                    $resultado = $arg1 - $arg2;
                    return $resultado;
                }
                function adicao ($arg1, $arg2) {
                    $resultado = $arg1 + $arg2;
                    return $resultado;
                }
                
                function divisao ($arg1, $arg2) {
                    $resultado = $arg1 / $arg2;
                    return $resultado;
                }    
                function multiplicacao ($arg1, $arg2) {
                    $resultado = $arg1 * $arg2;
                    return $resultado;
                }    

                if ("-" == $op){
                    $resultado = subtracao($numero1, $numero2);
                    echo $resultado;
                }

                if ("+" == $op){
                    $resultado = adicao($numero1, $numero2);
                    echo $resultado;
                }

                if ("/" == $op){
                    $resultado = divisao($numero1, $numero2);
                    echo $resultado;
                }

                if ("*" == $op){
                    $resultado = multiplicacao($numero1, $numero2);
                    echo $resultado;
                }





                
                
    ?>