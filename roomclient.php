<?php
 include('conn.php');
 $nickname = $_REQUEST['nickname'];

  $insert1 = "INSERT INTO client_chat (nickname,created_at)
					 VALUES ('".$_REQUEST['nickname']."',now())";
		   mysql_query($insert1);
		   
  $rs = mysql_query("SELECT MAX(id) AS id FROM client_chat");
        if ($row = mysql_fetch_row($rs)) {
            $id = trim($row[0]);	
	 	   }		   
  $insert2 = "INSERT INTO chat_user (user_id,created_at)
                      VALUES (".$id.",now())";
				  
			mysql_query($insert2);		  		   
   $estado = 1;

 ?>
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Servicio de Taxi Online [<?php echo $nickname; ?>]</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="functions.js"></script>
<script type="text/javascript">
</script>
<link href="styles.css" rel="stylesheet" type="text/css"></link>	
<script language="JavaScript">
<!--
if (document.layers)
  document.captureEvents(Event.KEYDOWN);
  document.onkeydown =
    function (evt) { 
      var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
      if (keyCode == 13)
       {
         send_message('output_div','text_content','1');
       }
    }
//-->
</script>
</head>
<body onload="get_message('output_div','1')">
<center>
 <div class="body-holder">
    <div class="window">
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
		  <td><img src='Images/header_01.jpg' height="34"></td>
		  <td background="Images/header_02.jpg" >
			<img src="Images/1.gif" border="0" >
		  </td>
		  <td background="Images/header_02.jpg" width="100%">
			<div id="window_title">&nbsp;Chat [<?php echo $nickname; ?>]</div>
		  </td>
		  <td background="Images/header_02.jpg" >
		
		  </td>
		  <td><img src='Images/header_03.jpg'></td>
		</tr>
		</table>
	</div>
 	 <div id="tools">
	   <?php
	   $res_smilies = mysql_query("select * from smilies");
	   $count = 0;
	   echo "<table cellspacing=1 border=0 cellpadding=1>\n<tr>";
	   	while($row_smilies = mysql_fetch_array($res_smilies))
		{
			if($count == 4)
			{
				echo "</tr><tr>";
				$count=0;
			}
			echo "\n<td align='center' width='35'>\n <a href='#' alt='".$row_smilies['image_code']."' onclick=\"add_code('".($row_smilies['image_code'])."');\" border=\"0\"><img src=\"Images/".$row_smilies['id'].".gif\" border=\"0\"></a>\n</td>";
			$count ++;
		}
		echo "</table>";
	  ?>
	 </div>
     <div class="main_container">
		<div class="output-div-container">
		   <div id="output_div" onclick="show_smilies()">
		   </div>
		</div>
		<table border="0" width="504" class="tool_table">
		 <tr>
		  <td width="20"><a href="#" onclick="show_smilies('tool')"><img src="Images/1.gif" border="0"></a></td>
	      <td></td>	
		 </tr>
		</table>
		<div class="input-div">
		   <textarea type="text" id="text_content" onclick="show_smilies()" size="40" ></textarea>
		   <input type="submit" value="send" onclick="send_message('output_div','text_content','1')">
		</div>
	</div>
	</div>
 </center>
</body>
</html>