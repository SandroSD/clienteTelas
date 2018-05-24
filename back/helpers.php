<?php
/* Aquí iran algunas funciones que nos ayuden a manipular los datos */

    function prd($param){
        echo "<pre>";
        print_r($param);
        die();
    }

    function dateESPtoENG($date){   
        $dia  = substr($date,0,2);
        $mes  = substr($date,3,2);
        $anio = substr($date,6);

        return $anio."-".$mes."-".$dia;
    }


?>