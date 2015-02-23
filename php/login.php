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
		<div class="span4 offset4">
			<form action="querys.php" method="post">
				<legend>login</legend>
				<label>Nombre</label>
				<input class="input-control text" type="text" placeholder="Ingresa tu usuario" name="usr" required="required">
				<label>Contraseña</label>
				<div class="input-control password">
				    <input type="password" value="" placeholder="Ingresa tu contraseña" name="psw" required="required"/>
				    <button class="btn-reveal"></button>
				</div>
				<input type="submit">
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