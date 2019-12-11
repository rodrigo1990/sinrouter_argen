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
							<li class="text-center">
								
								<span><b>¡NUEVO!</b></span>
								<a href="/cambio"  class="fix spa-btn" target="_blank">
									CAMBIO
								</a>

							</li>
							<li class="text-center">
								
								<span><b>¡NUEVO!</b></span>
								<a   class="fix spa-btn shop go-to-shop" >SHOP</a>

							</li>

							<li><a id="" class=" abrirMenu boton-menu-desplegable"><i class="fa fa-bars" ></i></a></li>

							
						 <li><a href="/micuenta/quiero-pagar.php" target="" class="after-btn ocultable"  >CONSULTÁ TU CUENTA</a></li>
							<li><a href="/sucursales" class="spa-btn after-btn ocultable">NUESTRAS SUCURSALES</a></li>

							<li id="quienes-somos-btn" class="ocultable" onmouseover="submenuShow('#quienes-somos-btn')" onmouseleave="submenuHide('#quienes-somos-btn')">
								<a   class="after-btn" >QUIENES SOMOS</a>
									<ul class="submenu">
										<li><a href="/institucional" class="spa-btn" >INSTITUCIONAL</a></li>
										<li><a href="/resp_social" class="spa-btn" >RESPONSABILIDAD SOCIAL</a></li>
									</ul>
								
							</li>

							<li class="ocultable">
								
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
						<a class="abrirMenu">
							<i class="fa fa-bars"  id="abrirMenu-xs"></i>
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
			<li>
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="/saca_tu_prestamo" class="xs-btn spa-btn">
					SACA TU PRÉSTAMO
				</a>
			</li>

			<li>
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="/cambio" class="xs-btn spa-btn">
					CAMBIO
				</a>
				<span>NUEVO</span>
			</li>
			
			<li>
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="/shop" class="xs-btn spa-btn go-to-shop">
					SHOP
				</a>
				<span>NUEVO</span>
			</li>

			<li>
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="micuenta/quiero-pagar.php"  class="xs-btn" >
					CONSULTÁ TU CUENTA
				</a>
			</li>
			<li>
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="/sucursales" class="xs-btn spa-btn">
				NUESTRAS SUCURSALES
				</a>
			</li>

			<li>
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="/institucional" class="xs-btn spa-btn">
					INSTITUCIONAL
				</a>
			</li>

			<li class="submenu-btn" onmouseover="submenuShow('#xsMenu')" onmouseleave="submenuHide('#xsMenu')">
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a  class="xs-btn spa-btn">
					QUIENES SOMOS <img src="<?php echo asset('storage/img/arrow-down-menu.svg') ?>">
				</a>

				<ul class="submenu">
					<li>
						<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
						<a href="/resp_social" class="xs-btn spa-btn">
							RESPONSABILIDAD SOCIAL
						</a>
						
					</li>
					<li>
						<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
						<a href="/preguntas_frecuentes" class="xs-btn spa-btn">
							PREGUNTAS FRECUENTES
						</a>
					</li>
				</ul>
			</li>


			<li class="xs-item">
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="/resp_social" class="xs-btn spa-btn">
					RESPONSABILIDAD SOCIAL
				</a>
				
			</li>
			<li class="xs-item">
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="/preguntas_frecuentes" class="xs-btn spa-btn">
					PREGUNTAS FRECUENTES
				</a>
			</li>			

			
			<li>
				<img src="<?php echo asset('storage/img/list-img-menu.svg') ?>" alt="">
				<a href="#contacto" class="xs-btn" id="cont-xs">
					CONTACTO
				</a>
			</li>
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