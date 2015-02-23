<script type="text/javascript">
		$(function noticia(){
		        setTimeout(function(){
		            $.Notify({style: {background: '#1ba1e2', color: 'white'}, caption: 'Info...', content: 'Metro UI CSS is Simple!!!'});
		        }, 1000);
		});
</script>

<?php 

	$u = $_POST['usr'];
	$c = $_POST['psw'];

	$conn = mysqli_connect('localhost','super','Temporal1','prueba');
	
	$consulta = "SELECT usuario FROM usuario WHERE usuario = '".$u."' and contrasena='".$c."'";

	$resultado = mysqli_query($conn,$consulta);

	if(mysqli_num_rows($resultado)==1){
		echo "<script>
					alert('El usuario esta registrado en DB');
			  </script>";
		echo "<meta http-equiv='refresh' content='0; url=login.php'>"; 
	}else{
		echo "<script>alert('NO registrado');</script>"; 
	}

	mysqli_close($conn);
 ?>

<script type="text/javascript">
	   window.location = "login.php";
</script>