<?php 

session_start();

include 'servicio.php';


$estudiante=$_SESSION['estudiante'];

if(isset($_GET['id'])){

    $estudianteid=$_GET['id'];

    $elementoinicio= getelemento ($estudiante,'id',$estudianteid);

    unset($estudiante[$elementoinicio]);

    $_SESSION['estudiante']= $estudiante;

}

header("location: index.php");
exist();

?>