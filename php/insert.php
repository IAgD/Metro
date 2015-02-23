<?php 

	$u = $_POST['usr'];
	$c = $_POST['psw'];

	$conn = mysqli_connect('localhost','super','Temporal1','prueba');
	
	$consulta = "INSERT INTO usuario VALUES (NULL,'".$u."','".$c."')";

	$resultado =mysqli_query($conn,$consulta);
	if($resultado){
		echo "<script>
					alert('Se insert correctamente');
			  </script>";
		echo "<meta http-equiv='refresh' content='0; url=sigin.php'>"; 
	}else{
		echo "<script>alert('No se pudo insertar');</script>"; 
	}
	
	mysqli_close($conn);
 ?>

 <script type="text/javascript">
 	window.location = "signin.php";
 </script>