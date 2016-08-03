<?php

$op = $_REQUEST['op'];

switch($op){
	case '1': // home
		echo "<h1>Bienvenidos!</h1>
		      <b>Somos una empresa dedicada al servicio profesional de Taxi seguro
                 en la Ciudad de Guatemala, la seguridad y el profesionalismo son rasgos que nos distinguen
                 como una empresa altamente confiable.</b><br><br>

              <b>La unión de varias Corporaciones hemos logrado hacer un servicio eficiente y tecnológico.<b>";
		
	break;
	case '2': // Nuestra Empresa
		 
		   echo "<b>MISION</b><br>
                 <p>Crecer y ser la empresa líder en el Transporte tipo taxi.
                    Aumentar el número de clientes gracias al buen servicio de nuestros Pilotos y al confort de
                    nuestras unidades. Avanzar con el desarrollo de la tecnología para ser los mejores.</p><br>

                 <b>VISION</b> <br>
                 <p>Brindar a nuestros usuarios un servicio de calidad, trabajar en equipo para lograr que su
                    servicio de taxi esté a tiempo y transportarlo con seguridad.
                    <b>OFRECER A NUESTRO CLIENTES EL MEJOR SERVICIO.</b><p>";
		
	break;
		
	case '3': // Servicios
		
		 echo "<h1>Servicios</h1><br>
		        <p>La empresa ofrece el servicio de transporte en taxi a personas particulares, turistas y
				entidades empresariales. Cubrimos toda la Ciudad de Guatemala, municipios aledaños,
				Interior de la República, El Salvador y Honduras.</p><br>

				<p>Solicite su servicio de Taxi por medio de nuestra reservación llenando los datos que
				se le piden, por chat y vía telefónica.</p><br>

				<p>Le damos su tarifa antes de realizar el viaje, vía telefónica, chat o email, para que usted este
				enterado del costo de su servicio.</p><br>

				<p>Tenemos la opción de pago en efectivo, tarjeta de crédito y por medio de vales para contratos
				corporativos. Con el pago de vales la empresa afiliada podrá ejercer un control más ágil y
				eficaz sobre los gastos de movilización de su personal.</p><br><br>

				<p>Brindamos los siguientes servicios:</p><br><br>

                <ul>
				 <li>Reservas por anticipado</li>
				 <li>Seguridad en el Servicio</li>
				 <li>Servicio 24 horas</li>
			 	 <li>Servicio de MENSAJERIA</li>
				 <li>Servicio a Nivel Nacional</li>
				 <li>Servicio Puerta a Puerta</li>
				 <li>Servicio por horas</li>
				 <li>Servicio del y al Aeropuerto</li>
				 <li>Call-Center las 24 horas los 365 dias del año.</li>
				</ul> 
				 ";
		
	break;
	
	case '4': // Tarifario
		
		   echo "<h1>Tarifario</h1>
		         Al solicitar su servicio le damos el costo de inmediato para que usted autorice si desea el
servicio.<br><br>
		         <table>
		         <tr>
		           <th>Tipo de Viaje</th>
		           <th>Precio<th>
		         </tr>
		         <tr>
		          <td>Antigua Guatemala</td>
		          <td>Q 200.00</td>
		         <tr>
		         <tr>
		          <td>Puerto de San Jose</td>
		          <td>Q 500.00</td>
		         <tr>
		         <tr>
		          <td>Lago de Atitlan</td>
		          <td>Q 725.00</td>
		         <tr>
		          <td>San Lucas</td>
		          <td>Q 125.00</td>
		         </tr>
		         <tr>
		          <td>Barberena (Santa Rosa)</td>
		          <td>Q 250.00</td>
		         </tr>
		         <tr>
		          <td>Sanarate El progreso</td>
		          <td>Q 600.00</td>
		         </tr>
		         </table>
		        ";
		
	break;
	
	case '5': // Contactenos
		
		   echo "<h1>Cont&aacute;tenos</h1>
		          <form name=contactenos id=contactenos method=POST >
		           <table>
		             <tr>
		               <td><label>Nombres Completos</label></td>
		               <td><input type=text id=nombres name=nombres></td>
		             </tr>
		            
		             <tr>
		               <td><label>Correo electr&oacute;nico: </label></td>
		               <td><input id=email name=email></td>
		             </tr>
		             <tr>
		               <td><label>Comentarios:</label></td>
		               <td><textarea id=comments name=commnets size=100></textarea></td>
		             </tr>
		             <tr>
		               <td></td>
		               <td align=right><button type=button onclick=sendemail()>Enviar</button></td>
		             </tr>
		           </table>
				  </form>";
		
	break;
	
	
}

?>