<!--esta parte de codigo que viene es la que va en un documento php con nombre contacto2.php*/
<?php
//Importamos las variables del formulario de contacto

@$Name = htmlspecialchars($_POST['Name']);
@$Email = htmlspecialchars($_POST['Email']);
@$Phone = htmlspecialchars($_POST['Phone']);
@$Message = htmlspecialchars($_POST['Message']);
//Preparamos el mensaje de contacto
$cabeceras = "From: $Correo\n" //La persona que envia el correo
 . "Reply-To: $Correo\n";
$asunto = "From: Andresshare $Motivo\n"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "andresshare@gmailcom"; //cambiar por tu email
$contenido = "$Nombre ha enviado un mensaje desde el sitio web \n"
. "\n"
. "Nombre: $Name\n"
. "Motivo: $Email\n"
. "Empresa: $Phone\n"
. "Correo: $Correo\n"
. "Mensaje: $Message\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) { 

//Si el mensaje se envía muestra una confirmación
echo '<div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <strong>Su mensaje ha sido enviado correctamente.</strong>
</div>    
</div>
</div>';
}else{
//Si el mensaje no se envía muestra el mensaje de error
echo '<div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <strong>ERROR. Intente mas tarde.</strong>
</div>    
</div>
</div>';
}

?>  -->