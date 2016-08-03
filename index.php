<?php
 include('conn.php');
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Mi Taxi Seguro | INICIO </title>
		<link rel="stylesheet" href="css/jquery-ui.css" />
        
         
		<link rel="stylesheet" type="text/css" href="css/estilo.css"> 

        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
	    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.3"></script>
	    <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link rel="stylesheet" href="js/jquery.ui.timepicker.css?v=0.3.2" type="text/css" />
        <script type="text/javascript" src="js/jquery.ui.timepicker.js?v=0.3.2"></script>
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        
    
 
 <script type="text/javascript">
		$(document).ready(function() {
				$( "#datepicker" ).datepicker();
				
				$('.fancybox').fancybox();
				
				$("#fancybox-manual-c").click(function() {
					$.fancybox.open([
						{
							href : '1_b.jpg',
							title : 'My title'
						}, {
							href : '2_b.jpg',
							title : '2nd title'
						}, {
							href : '3_b.jpg'
						}
					], {
						helpers : {
							thumbs : {
								width: 75,
								height: 50
							}
						}
					});
				});
			});
	
	  
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-12713380-18']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
	
  </script>
	</head>
	<body>
		<div id="placeholder"></div>
		<div id="contenedor">
			<div id="article">
                     <h1>Bienvenidos!</h1><br> 
		      <b>Taxi Seguro</b> es una empresa especializada en el servicio de transportes de tralados urbanos, 
			  huéspedes hoteleros y personal a nivel empresarial, particular.
              Nuestro servicio cuenta con mas de 180 unidades en toda la capital de la ciudad de Guatemala, ofreciendole, llegar al 
              punto origen y llevarlo de forma segura a su destino.                       
             </div>
			<div id="header">
				<div id="telefonos"> </div>
				<div id="menu">
				    <div id="logo"></div>
				    <div id="menunav">
				    	<ul>
				    		<li><a href="#" onclick="contenidos(1)"> Inicio</a></li>
				    		<li><a href="#" onclick="contenidos(2)">Nosotros</a></li>
				    		<li><a href="#" onclick="contenidos(3)">Servicios</a></li>
				    		<!--<li><a href="#" onclick="contenidos(3)">Reservaciones</a></li>-->
				    		<li><a href="#" onclick="contenidos(4)">Tarifas</a></li>
				    		<!--<li><a href="#chatclient" class="fancybox">Chat</a></li>-->
				    		<li><a href="#" onclick="contenidos(5)">Cont&aacute;ctanos</a></li>
				    	</ul>
				    </div>
				 </div>    
			</div>
			<div id="cuerpo">
				<div id="reservaciones">
					<h1>Reservaciones Online</h1>
					<form name="formreservaciones" id="formreservaciones" method="post">
						<table id="reserv">
							<tr>
								<td><label>Nombres completos</label></td>
								<td><input type="text" id="rnombres" name="rnombres" /></td>
							</tr>
							<tr>
								<td><label>Email</label></td>
								<td><input type="text" id="remail" name="remail" /></td>
							</tr>
							<tr>
								<td><label>Celular</label></td>
								<td><input type="text" id="rcelular" name="rcelular" /></td>
							</tr>
							<tr>
								<td colspan="2" align="left"><h3>Detalles del Servicio</h3></td>
								
							</tr>
							<tr>
								<td><label>Direcci&oacute;n Origen</label></td>
								<td><input type="text" id="rdirecciono" name="rdirecciono" /></td>
							</tr>
							<tr>
								<td><label>Direcci&oacute;n Destino</label></td>
								<td><input type="text" id="rdirecciond" name="rdirecciond" /></td>
							</tr>
							<tr>
								<td><label>Fecha</label></td>
								<td><input type="text" id="datepicker" name="rfecha"  /></td>
							</tr>
							<tr>
								<td><label>Hora</label></td>
								<td><input type="text" style="width: 70px;" id="timepicker.[1]" name="rhora" value="" />
        <script type="text/javascript">
            $(document).ready(function() {
                $('#timepicker\\.\\[1\\]').timepicker( {
                    showAnim: 'blind'
                } );
            });
        </script></td>
							</tr>
							<tr>
								<td><label>No. Pasajeros</label></td>
								  <td><select id="rnpasajeros" name="rnpasajeros">
								  	          <option value="0"></option> 
								  	      <?php for($i=1;$i<8;$i++): ?>
								  	      	  <option value="<?php echo $i ?>"><?php echo $i; ?> </option>  
								  	      <?php endfor; ?>	
									  </select>   
							 	  </td>
							</tr>
							<tr>
								<td colspan="2">*Debe de reservar con un mínimo de 1 hora, un operador le confirmara el servicio al teléfono registrado.</td>
							</tr>
							<tr>
								<td></td>
								<td align="right"><button type="button" onclick="reservar()">Reservar</button></td>
							</tr>
						</table>
					</form>
				</div>
				<div id="taxi"></div><div id="chaticono"><a href="#chatclient" class="fancybox"><img src="images/chatonline.jpg" /></a></div>
				<div id="visanet"><a href="#"> <img src="images/visanet.jpg" /></a></div>
			</div>
			<div id="music">
				
				<EMBED SRC="mix/1.mp3" AUTOSTART=true LOOP=true VOLUME="50" WIDTH="0" HEIGHT="0"></EMBED>


			</div>
			
		</div>
	
	<div id="chatclient" style=" display: none">	<img src="Images/tipclose.gif" id="close" width="20" height="15" onclick="$.fancybox.close();"><?php include('loginchat.php'); ?></div>
	</body>
	
	
</html>





<!--fading background-->
<script src="./js/cross-slide.js"></script>
<script>
$(function() {
$('#placeholder').crossSlide({
sleep:2,
fade: 6	  
}, 
[
      { src: './images/portada/fondo1.jpg'},
      { src: './images/portada/fondo2.jpg'},
      { src: './images/portada/fondo3.jpg'},
      { src: './images/portada/fondo4.jpg'}
    ])
    
    
    
    
    
  });

function contenidos(op){
		
		
		
		
		 var url = "content.php?op="+op;
		               $.ajax({
			           type: "POST",
			           url: url,
			           data: $("#article").serialize(),
			           
			           success: function(data)
			           {
			           	
			           	$('#article').html(data);
				       
				        
				        
				         
			           }
		             });
		
}

function sendemail(){
		
		
		 var url = "sendemail.php";
		               $.ajax({
			           type: "POST",
			           url: url,
			           data: $("#contactenos").serialize(),
			           
			           success: function(data)
			           {
			           	
			           	$('#article').html(data);
		
				         
			           }
		             });
		
}

function reservar(){
		
		
		 var url = "sendemailreservacion.php";
		               $.ajax({
			           type: "POST",
			           url: url,
			           data: $("#formreservaciones").serialize(),
			           
			           success: function(data)
			           {
			           	
			           	$('#reservaciones').html(data);
		
				         
			           }
		             });
		
}
	
</script>



