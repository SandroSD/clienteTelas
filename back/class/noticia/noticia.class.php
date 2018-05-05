<?php

include_once("../../core.php");

$bd = new bd();

class noticia{

    public function crearNoticia($POST){
       $query="INSERT INTO `seguplast`.`noticia` (`descripcion`, `fechaPublicacion`, `estado`) VALUES ('', '', '')";
       $bd->ejecutarQuery($query);
       return 1;
    }
    public function modificarNoticia($POST){
        $query="UPDATE `seguplast`.`noticia` SET `estado`='0' WHERE `idNoticia`='1'";
        $bd->ejecutarQuery($query);
        return 1;
    }
    public function ocultarNoticia($id){
        $query="UPDATE `seguplast`.`noticia` SET `estado`='0' WHERE `idNoticia`='".$id."'";
        $bd->ejecutarQuery($query);
    }
    public function verUltimasNoticias(){
        $query="SELECT * FROM noticia ORDER BY fechaPublicacion DESC";
        $bd->ejecutarQuery($query);
    }
}
?>