<script>
	function enviarchat(){
	var url = "roomclient.php?nickname="+document.getElementById("nickname").value;
		               
	 if(document.getElementById("nickname").value != "" && document.getElementById("nickname").value !=" ")
	    {
	      location.href=url
		}
	  else{
	  	document.getElementById("error").innerHTML = ('Debe Agregar un nombre.');
	  }		         
	}	             
</script>
<div id="login-chat">
	
	<form name="login" >
		<table>
			<tr>
				<td>
					<label>Nickname: </label><label id="error"></label>
				</td>
			</tr>
			<tr>
				<td><input type="text" id="nickname" name="nickname"></td>
			</tr>
			<tr>
				<td><button type="button" onclick="enviarchat()">Ingresar</button></td>
			</tr>
		</table>
		
	</form>
</div>