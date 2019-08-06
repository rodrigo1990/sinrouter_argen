<footer class="{{$class}}">
	<div class="first padding-12 bk-red row text-center">
		<p>
			<b>Horario de atención:</b>  Lunes a viernes de 09 a 19 hs. - Sábados: de 09 a 13 hs.
		</p>
	</div>
	<div class="row second margin-top-50 ">
		<div class="container-fluid">
			<div class="col-lg-2">
				<img class="logo img-responsive" src="<?php echo asset("storage/img/logo.png")?>"></img> 
			</div>
			<div class="col-lg-3">
				<h4>NUESTROS SERVICIOS</h4>
				<hr>
					<ul>
						<li class="margin-top-10"><a href="/saca_tu_prestamo" class="red"><b>- SACÁ TU PRÉSTAMO</b></a></li>
						<li class="margin-top-10"><a href="/cambio" class="blue" target="_blank"><b>- CAMBIO</b></a></li>
						<li class="margin-top-10"><a href="/consulta_tu_cuenta">Consultá tu cuenta</a></li>
					</ul>
				
			</div>
			<div class="col-lg-7">
				<h4>SOBRE NOSOTROS</h4>
				<hr>
				<div class="row">
					<div class="col-lg-4">
						<ul>
							<li class="margin-top-10"><a href="/institucional" class="spa-btn">Quienes somos</a></li>
							<li class="margin-top-10"><a href="/resp_social" class="spa-btn">Responsabilidad social </a></li>
						</ul>
					</div>
					<div class="col-lg-4">
						<ul>
							<li class="margin-top-10"><a  href="/sucursales" class="spa-btn">Nuestras sucursales </a></li>
							<li class="margin-top-10"><a href="/preguntas_frecuentes" class="spa-btn">Preguntas frecuentes </a></li>
						</ul>
					</div>
					<div class="col-lg-4">
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

