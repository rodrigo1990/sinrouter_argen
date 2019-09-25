	<header id="menu-center" >
			<div  class="row">
				<div class="container-fluid">
					<div class="col-lg-2 hidden-md hidden-sm hidden-xs ">
						<a href="/index" id="logo-btn" style="cursor:pointer">
							<img class="logo" src="<?php echo asset("storage/img/logo.png")?>"></img> 

						</a>
					</div>

					<div class="col-lg-10 hidden-md hidden-sm hidden-xs btn-cont">
						<ul id="nav" class="menu">

							<li><a href="/saca_tu_prestamo"  class="fix spa-btn">SACÁ TU PRÉSTAMO</a></li>
							<li><a href="/cambio"  class="fix spa-btn" target="_blank">CAMBIO</a></li>
							<li><a href="/shop"  class="fix spa-btn shop go-to-shop" >SHOP</a></li>

							
							<li><a href="/micuenta/quiero-pagar.php" target="" class="after-btn"  >CONSULTÁ TU CUENTA</a></li>
							<li><a href="/sucursales" class="spa-btn after-btn">NUESTRAS SUCURSALES</a></li>

							<li id="quienes-somos-btn">
								<a   class="after-btn">QUIENES SOMOS</a>
									<ul class="sub-menu">
										<li><a href="/institucional" class="spa-btn" >INSTITUCIONAL</a></li>
										<li><a href="/resp_social" class="spa-btn" >RESPONSABILIDAD SOCIAL</a></li>
									</ul>

							</li>

							<li class="">
								
								<a href="https://www.facebook.com/argenpesos" target="_blank" class="float-left rr-ss"><i class="fab fa-facebook-f"></i></a>


								<a href="https://www.instagram.com/argenpesos/" target="_blank" class="float-left rr-ss"><i class="fab fa-instagram"></i></a>
							</li>
							
						</ul>
					</div>

				</div>
				<div class="hidden-lg col-md-12 col-sm-12 col-xs-12 text-center xs-row " style="">
					<a href="/index">
						<img src="<?php echo asset("storage/img/logo.png")?>" width="150px"></img> 
					</a>
						<a id="abrirMenu">
							<i class="fa fa-bars"  id="abrirMenu"></i>
						</a>
					</div>
			</div>
		</header>
	
		<ul id="xsMenu" class="overlay-xs-menu menu">
			<div class="row">
				<a id="cerrarMenu"  class="close-menu-xs">
					<i class="fas fa-times"></i>
				</a>
			</div>
			<li><a href="/saca_tu_prestamo" class="xs-btn spa-btn">SACA TU PRÉSTAMO</a></li>
			<li><a href="/cambio" class="xs-btn spa-btn">CAMBIO</a></li>
			<li><a href="/shop" class="xs-btn spa-btn go-to-shop">SHOP</a></li>

			<li><a href="micuenta/quiero-pagar.php"  class="xs-btn" >CONSULTÁ TU CUENTA</a></li>
			<li><a href="/sucursales" class="xs-btn spa-btn">NUESTRAS SUCURSALES</a></li>

			<li><a href="/institucional" class="xs-btn spa-btn">INSTITUCIONAL</a></li>

			<li><a href="/resp_social" class="xs-btn spa-btn">RESPONSABILIDAD SOCIAL</a></li>
			<li><a href="#contacto" class="xs-btn" id="cont-xs">CONTACTO</a></li>
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
				<img src="<?php echo asset("storage/img/logo-xs.svg")?>">
			</a>
		</li>
		</ul>