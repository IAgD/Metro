<?php include 'php/cabecera.php'; ?>

<div class="grid offset1">
	
	<!--Start titulo de la pagina-->
	<div class="row">
		<div class="span12 bg-indigo fg-white">
			<i class="icon-rocket on-left tam"></i><span class="tam">CRUD</span><br><h5 class="fg-white">with Metro-Style</h5>
		</div>
	</div>
	<!--End titulo de la pagina-->

	<div class="row"></div>
	<div class="row"></div>
	<div class="row"></div>
	
	<!--Start menu de la pagina-->
	<div class="row">
		<div class="span1"></div>
		<div class="span10">	
			<a class="tile double ol-transparent bg-darkViolet" data-click="transform" href="php/login.php">
                <div class="tile-content icon"><span class="icon-diamond"></span></div><div class="tile-status"><span class="name">INGRESAR</span></div>
            </a>
            <a class="tile double ol-transparent bg-darkViolet" data-click="transform" href="php/sigin.php">
                <div class="tile-content icon"><span class="icon-tag"></span></div><div class="tile-status"><span class="name">REGISTRAR</span></div>
            </a>
            <a class="tile double ol-transparent bg-darkViolet" data-click="transform" href="php/up.php">
                <div class="tile-content icon"><span class="icon-calculate"></span></div><div class="tile-status"> <span class="name">ACT - MOD</span></div>
            </a>
		</div>
		<div class="span1"></div>
	</div>
	<!--End menu de la pagina-->

	<!--live tile de la pagina-->
	<div class="row"></div>
	<div class="row"></div>
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

<?php include 'php/piedepagina.php'; ?>