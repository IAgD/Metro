<?php include 'cabecera.php'; ?>
<?php include 'links.inc'; ?>

<div class="grid offset1">
	
	<!--Start titulo de la pagina-->
	<div class="row">
		<div class="span12 bg-indigo fg-white">
			<i class="icon-rocket on-left tam"></i><span class="tam">CRUD</span><br><a class="in" href="../index.php">Home</a><h5 class="fg-white">with Metro-Style</h5>
		</div>
	</div>
	<!--End titulo de la pagina-->

	<div class="row">
		<div class="span10 offset1">
				<legend>Update and Delete profiles</legend>		

				<!--Consulta php para traer la informacion de la base y representarla en una tabla-->		
				<?php 
					$conn = mysqli_connect('localhost','super','Temporal1','prueba');
					
					$consulta = "SELECT * FROM usuario";

					$resultado = mysqli_query($conn,$consulta);

					echo '
						<table class="table striped hovered dataTable" id="dataTables-1" aria-describedby="dataTables-1_info">
			                <thead>
				                <tr role="row">
				                	<th class="text-left tabindex="0" aria-controls="dataTables-1" rowspan="1" colspan="1" aria-label="UID" style="width: 162px;" aria-sort="ascending">UID</th>
				                	<th class="text-left aria-controls="dataTables-1" rowspan="1" colspan="1" aria-label="USER" style="width: 286px;">USER</th>
				                	<th class="text-left aria-controls="dataTables-1" rowspan="1" colspan="1" aria-label="PASSWORD" style="width: 267px;">PASSWORD</th>
				                	<th class="text-left aria-controls="dataTables-1" rowspan="1" colspan="1" aria-label="update" style="width: 267px;"></th>
				                	<th class="text-left aria-controls="dataTables-1" rowspan="1" colspan="1" aria-label="delete" style="width: 267px;"></th>
				                </tr>
			                </thead>';

					/*Se consulta nuevamente a base de datos pero esta vez con la intencion de que aquellos campos posibles a modificar
					  sean editables y cuando los cambios esten listos, por fila se debe dar clic en el boton actualizar
					*/

					while($item=mysqli_fetch_array($resultado)){
						echo "<tr>
								<td>".$item['id']."</td>
								    <form action='upt.php?id=".$item['id']."' method='post'>
						                    <td><input class='input-control text' type='text' name='usuario' value=".$item['usuario']."></td>
						                    <td><input class='input-control text' type='text' name='contrasena' value=".$item['contrasena']."></td>
						                    <td><input type='submit' value='Update'></td>
					                </form>
					                <!--Boton que manda el id del usuario a elimiar por metodo post,
										ESTA FUERA DEL FORM DE ACTUALIZACION YA QUE EJECUTA UNA ACCION INDEPENDIENTE-->
				                <td><a href='delete.php?id=".$item['id']."'><button>Delete</button></a></td>
			            	  </tr>";
					}
					echo '	                
		                </table>';
					
					mysqli_close($conn);
				 ?>
			</form>
		</div>
	</div>
	
	<!--live tile de la pagina-->

	<div class="row"></div>

	<div class="row">
		<div class="span1"></div>
			<div class="span10">
				<div class="tile double live " data-role="live-tile" data-effect="slideRight">
					<div class="tile-content image"><img src="http://simplyswiss.typepad.com/simplyswiss/images/swatch_logo_and_product.jpg" ></div>
					<div class="tile-content image"><img src="http://mlpm.eu/static/media/uploads/logos/inserm_logo2_250px.jpg" ></div>
				</div>
				<div class="tile live double" data-role="live-tile" data-effect="slideUp">
				    <div class="tile-content image bg-white"><img src="http://www.vmotionhost.com/media/images/yii_logo.jpg"></div>
				    <div class="tile-content image bg-white"><img src="http://www.digimad.es/en/img/logo.png"></div>
				</div>
				<div class="tile live double" data-role="live-tile" data-effect="slideUpDown">
				    <div class="tile-content image bg-white"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Campus_Hungary_logo.jpg/250px-Campus_Hungary_logo.jpg"></div>
				    <div class="tile-content image bg-white"><img src="http://www.smespire.eu/wp-content/uploads/2013/12/logo.png"></div>
				</div>
			</div>
		<div class="span1"></div>
	</div>
	
	<div class="row"></div>
	<div class="row"></div>
	<div class="row">
		<div class="span12">
			<p id="pie">@Israel Aguirre | 2015 | (c)</p>
		</div>
	</div>
</div>

<?php include 'piedepagina.php'; ?>