<?php

require_once('../../../core.php');

$bd = new bd();


switch ($_GET['op']) {
    case 'nuevaNoticia':
        parse_str($_POST['datos'],$datos);
        
        $queryNuevaNoticia="INSERT INTO `seguplast`.`noticia` (`descripcion`, `fechaPublicacion`, `estado`) 
                            VALUES ('".$datos['descripcion']."','".dateESPtoENG($_POST['salida'])."','".$datos['estadoN']."')";
                            
        if($bd->ejecutarNonQuery($queryNuevaNoticia)){
            echo "OK";
        }else{
            echo "ERROR";
        }
    break;
    case 'modificarNoticia':
        parse_str($_POST['datos'],$datos);        

        $queryModificarNoticia = "UPDATE `seguplast`.`noticia` SET `descripcion`='".$datos['descripcion']."', `estado`='".$datos['estadoN']."' WHERE `idNoticia`='".$_POST['idNoticia']."'";
        if($bd->ejecutarNonQuery($queryModificarNoticia)){
            echo "OK";
        }else{
            echo "ERROR";
        }
    break;    
}


?>