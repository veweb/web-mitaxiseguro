<?php 

include('conn.php');
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
 			<th>Latitud</th>
 			<th>Longitud</th>
 			<th>Fecha</th>
 			
 		</tr>
 		<?php
 		$get = "select * from unidad ORDER BY DESC";	
  	       $res = mysql_query($get);
		  // echo count($res);
		   $num_rows = mysql_num_rows($res);
		   echo $num_rows;
		   if($num_rows)
			{
			   while($new_msg = mysql_fetch_array($res))
				    echo "<tr>
				           <td>".$new_msg['id']."1</td>
				           <td>".$new_msg['lat']."</td>
				           <td>".$new_msg['longi']."</td>
				           <td>".$new_msg['updated_at']."</td>
				           
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


