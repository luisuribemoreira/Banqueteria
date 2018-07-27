<?php
$nombre = $_POST['nombre'];    
$asunto = $_POST['asunto'];  
$mensaje = $_POST['mensaje'];  

mail('luisuribemoreira@gmail.com',$asunto,$mensaje);

header('Location: index.html');
?>