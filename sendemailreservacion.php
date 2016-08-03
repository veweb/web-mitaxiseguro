<?php 
   $nombre = $_REQUEST['rnombres'];
   $email = $_REQUEST['remail'];
   $celular = $_REQUEST['rcelular'];
   $direcciono = $_REQUEST['rdirecciono'];
   $direcciond = $_REQUEST['rdirecciond'];
   $fecha = $_REQUEST['rfecha'];
   $hora = $_REQUEST['rhora'];
   $npasajerso = $_REQUEST['rnpasajeros'];
   
   $link = mysql_connect("db461977375.db.1and1.com","dbo461977375","locames2013");
   if (!$link) {
      die('No pudo conectar: ' . mysql_error());
      }

mysql_select_db("db461977375");
   $q = "INSERT INTO reservacion(id,client_id,nombre,email,celular,direccion_origen,direccion_destino,fecha_servicio,hora,no_pasajeros,tarifa_id,unidad_id,estado) VALUES(null,1,'$nombre','$email','$celular','$direcciono','$direcciond','$fecha','$hora',$npasajerso,1,1,0)";
  
   //echo $q;
   //exit;
   $cosulta = mysql_query($q);
   
  
   
   $correo = "walter.rosales@gmail.com,pordonez@locames.net,reservaciones@mitaxiseguro.net";
   $subject = "Reservacion online";
   $message = "<b>Cliente:</b> ".$nombre." <br> <b>Correo:</b> ".$email."<br> <b>Celular:</b>".$celular."<br><b>Direcci&oacute;n Origen:</b>".$direcciono." <br>
               <b>Direcci&oacute;n Destino: </b>".$direcciond." <br> <b>Fecha: </b>".$fecha." <br><b>Hora:</b><br>".$hora." <b<br>N&uacute;mero de pasajeros:</b> ".$npasajerso;
   $headers  = "From: $email\r\n"; 
   $headers .= "Content-type: text/html\r\n";
   mail($correo, $subject, $message,$headers);
   //header('Location: gracias.html');	,
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