<?php
$nombre = $_POST['nombre'];    
$asunto = $_POST['asunto'];  
$fono = $_POST['fono'];
$tipoE  = $_POST['tipoE'];
$fecha = $_POST['fecha'];
$cant = $_POST['cant'];
$mensaje = $_POST['mensaje'];  

$mail = "Nombre: ".$nombre .". Fono: ". $fono . ". Tipo de Evento: ".$tipoE . ". Fecha Tentativa: ".$fecha . ". Cantidad de invitados: ".$cant . ". Mensaje: ".$mensaje;

if(mail('luisuribemoreira@gmail.com',$asunto,$mail))
{
    echo '<script language="javascript">alert("Correo enviado correctamente");</script>'; 
    header("http://altusbanqueteria.cl/");
  
}else
{
    echo '<script language="javascript">alert("El correo no se pudo enviar");</script>'; 
    header("http://altusbanqueteria.cl/");
}

?>