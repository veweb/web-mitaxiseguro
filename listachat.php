<?php 

include('conn.php');

function obtenernick($id){
	$query = "SELECT nickname from client_chat WHERE id=".$id;
	$s = mysql_query($query);
	$nickname = mysql_fetch_array($s);
	return $nickname['nickname'];
	
	
}

?>
<html>
	<head>
		<title>Administrador de Chat</title>
	</head>
 <body>
 	<div id="content">
 	<table>
 		<tr>
 			<th>Id</th>
 			<th>Nickname</th>
 			<th>Estado</th>
 			<th>Fecha</th>
 			<th>Acciones</th>
 		</tr>
 		<?php
 		$get = "select * from chat_user where status=0 and operador_id = 0";	
  	       $res = mysql_query($get);
		   $num_rows = mysql_num_rows($res);
		   if($num_rows)
			{
			   while($new_msg = mysql_fetch_array($res))
				    echo "<tr>
				           <td>".$new_msg['id']."</td>
				           <td>".obtenernick($new_msg['user_id'])."</td>
				           <td>".$new_msg['status']."</td>
				           <td>".$new_msg['created_at']."</td>
				           <td><a target='blank' href='operadorchat.php?idchat=1' >Atender</a></td>
				          </tr>
				          ";	
			}
 		
 		?>
 		<tr>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td></td>
 		</tr>
 	</table>
 	</div>
 </body>	
</html>


