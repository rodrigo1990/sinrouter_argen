	<header id="menu-center" class="cambio" >
			<div  class="row">
				<div class="container-fluid">
					<div class="col-lg-2 hidden-md hidden-sm hidden-xs ">
						<a href="index" id="logo-btn" style="cursor:pointer">
							<img class="logo" src="<?php echo asset("storage/img/cambio/logo-cambio.svg")?>"></img> 

						</a>
					</div>

					<div class="col-lg-10 hidden-md hidden-sm hidden-xs btn-cont">
						<ul id="nav" class="menu">
							<li><a   class="spa-btn after-btn" onClick="scrollAnimate('#quienes-somos')">QUIÉNES SOMOS</a></li>
							<li><a  target="" class="after-btn" onClick="scrollAnimate('#donde-cambio')"  >¿DÓNDE CAMBIO?</a></li>
							<li><a  class="spa-btn after-btn" onClick="scrollAnimate('#contacto-form')">CONTACTO</a></li>

							<li class="">
								
								<a href="https://www.facebook.com/argenpesos" target="_blank" class="float-left rr-ss"><i class="fab fa-facebook-f"></i></a>


								<a href="https://www.instagram.com/argenpesos/" target="_blank" class="float-left rr-ss"><i class="fab fa-instagram"></i></a>
							</li>
							
						</ul>
					</div>

				</div>
				<div class="hidden-lg col-md-12 col-sm-12 col-xs-12 text-center xs-row " style="">
					<a href="index.php">
						<img src="<?php echo asset("storage/img/cambio/logo-cambio.svg")?>" width="150px"></img> 
					</a>
						<a class="abrirMenu">
							<i class="fa fa-bars"  id="abrirMenu"></i>
						</a>
					</div>
			</div>
		</header>
		<div class="cotizaciones">
			
			<img src="<?php echo asset('storage/img/cambio/eeuuflag.png') ?>" alt="" width="30px">
			
			<div id="owl-3" class="owl-one owl-carousel">
				<div>
					<p><b>Dolar:</b><span> <b>${{$archivo[4]}}</b></span> <b>Compra</b></p>
				</div>
				<div>
					<p><b>Dolar:</b><span> <b>${{$archivo[5]}}</b></span> <b>Venta</b></p>
				</div>
			</div>
		</div>
		<ul id="xsMenu" class="cambio overlay-xs-menu menu">
			<div class="row">
				<a id="cerrarMenu"  class="close-menu-xs">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<li><a  class="xs-btn spa-btn" onClick="scrollAnimate('#quienes-somos')">QUIÉNES SOMOS</a></li>
			<li><a  class="xs-btn" onClick="scrollAnimate('#donde-cambio')" >¿DÓNDE CAMBIO?</a></li>
			<li><a  class="xs-btn spa-btn" onClick="scrollAnimate('#contacto-form')">CONTACTO</a></li>


		<li class="center-block">
			<a href="https://www.instagram.com/argenpesos/" class="xs-btn left" target="_blank">
				<i class="fab fa-instagram"></i>
			</a>

			<a href="https://www.facebook.com/argenpesos" class="xs-btn left" target="_blank">
				<i class="fab fa-facebook-f"></i>
			</a>
		</li>

		<li class="xs-btn">
			<a href="index">
				<img src="<?php echo asset("storage/img/cambio/logo-xs.svg")?>">
			</a>
		</li>
		</ul>