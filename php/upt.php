<?php 

	$conn = mysqli_connect('localhost','super','Temporal1','prueba');
	
	$sql="UPDATE usuario SET usuario = '".$_POST['usuario']."',	contrasena='".$_POST['contrasena']."'
		  WHERE id=".$_GET['id']."";

	$rs = mysqli_query($conn,$sql);

	
	mysqli_close($conn);
 ?>

 <script type="text/javascript">
 	window.location = "up.php";
 </script>