<?php 
	$conn = mysqli_connect('localhost','super','Temporal1','prueba');

	$sql="DELETE FROM usuario WHERE id='".$_GET['id']."'";

	mysqli_query($conn,$sql);

	mysqli_close($conn);
 ?>

 <script type="text/javascript">
 	window.location="up.php";
 </script>