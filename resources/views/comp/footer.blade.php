<footer class="{{$class}}">
	<div class="first padding-12 bk-red row text-center">
		<p>
			<b>Horario de atención:</b>  Lunes a viernes de 09 a 19 hs. - Sábados: de 09 a 13 hs.
		</p>
	</div>
	<div class="row second margin-top-50 ">
		<div class="container-fluid">
			<div class="col-lg-2 col-md-2 col-sm-12">
				<img class="logo img-responsive" src="<?php echo asset("storage/img/logo.png")?>"></img> 
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<h4>NUESTROS SERVICIOS</h4>
				<hr>
					<ul>
						<li class="margin-top-10"><a href="/saca_tu_prestamo" class="blue"><b>- PRÉSTAMOS</b></a></li>
						<li class="margin-top-10"><a href="/cambio" class="green" target="_blank"><b>- CAMBIO</b></a></li>
						<li class="margin-top-10"><a  class="violet go-to-shop" target="_blank"><b>- SHOP</b></a></li>

						<li class="margin-top-10"><a href="/micuenta/quiero-pagar.php">Consultá tu cuenta</a></li>
					</ul>
				
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12">
				<h4>SOBRE NOSOTROS</h4>
				<hr>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<ul>
							<li class="margin-top-10"><a href="/institucional" class="spa-btn">Quienes somos</a></li>
							<li class="margin-top-10"><a href="/resp_social" class="spa-btn">Responsabilidad social </a></li>
							<li class="margin-top-10" onmouseover="submenuShow('footer')" onmouseleave="submenuHide('footer')">
								<a  class="spa-btn">Terminos y condiciones </a>
								<ul class="submenu">
									<li><a href="<?php echo asset('storage/pdf/TÉRMINOS_Y_CONDICIONES_DEL_PRÉSTAMO_DIRIGIDO.pdf') ?>" target="_blank">Préstamo dirigidos comercios</a></li>
									<!--  <li><a></a></li>-->
								</ul>

							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<ul>
							<li class="margin-top-10"><a  href="/sucursales" class="spa-btn">Nuestras sucursales </a></li>
							<li class="margin-top-10"><a href="/preguntas_frecuentes" class="spa-btn">Preguntas frecuentes </a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<ul>
							<li class="margin-top-10" ><a data-toggle="modal" data-target="#trabajaConNosotros">Trabajá con nosotros </a></li>
							<li class="margin-top-10"><a data-toggle="modal" data-target="#comercializador">Convertite en comercializador </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="row terminos">
			
				<div class="col-sm-12 terminos">
					<div class="container-fluid">
						{{$terminos}}

					</div>	
				</div>
			
		</div>
		<div class="cuit" style="   ">
			<p class="text-center" style=""> Argencred S. A. CUIT 30-70910041-2</p>
		</div>
	

</footer>

