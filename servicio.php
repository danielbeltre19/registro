<?php

  $carrera = [1=>"Seleccione",2=>"Software",3=>"Seguridad",4=>"Redes",5=>"Mecatronica",6=>"Multimedia",7=>"Sonido"];
  
  
function getLastElement($lista){
    $contarlista=count($lista);
    $ultimoele=$lista[$contarlista - 1];

    return $ultimoele;
}
function getcarrera($carreraid){

    return $GLOBALS['carrera'][$carreraid];
}

function buscar($lista,$propiedad,$valor){

$filtral=[];

foreach ($lista as $articulo) {
  
  if($articulo[$propiedad]==$valor){

    array_push($filtral,$articulo);
  }

}
return $filtral;
}

function getelemento($lista,$propiedad,$valor){

$inicio=0;

foreach ($lista as $key => $articulo) {
  
  if($articulo[$propiedad]==$valor){

    $inicio=$key;
  }

}
return $inicio;
}

?>