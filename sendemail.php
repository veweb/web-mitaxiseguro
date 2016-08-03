<?php 
   $nombre = $_REQUEST['nombres'];
   $email = $_REQUEST['email'];
   $comentarios = $_REQUEST['commnets'];
   
   
   
   $correo = "walter.rosales@gmail.com,pordonez@locames.net,reservaciones@mitaxiseguro.net";
   $subject = "Mensaje desde sitio Web";
   $message = "<b>Nombre:</b> ".$nombre." <br> <b>Correo:</b> ".$email."<br> <b>Comentario:</b>".$comentarios;
   $headers  = "From: $email\r\n"; 
   $headers .= "Content-type: text/html\r\n";
   
   
   
   mail($correo, $subject, $message,$headers);
   //header('Location: gracias.html');
   echo "<h2>Cont&aacute;ctenos</h2>
					<p> GRACIAS POR ESCRIBIRNOS NOS ESTAREMOS COMUNICANDO CON USTED. </p>";
?>

<script LANGUAGE="JavaScript">
function redireccionar() 
{
location.href="index.php"
} 
setTimeout ("redireccionar()", 3500);

</script>
