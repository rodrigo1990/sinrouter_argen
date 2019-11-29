<div class="producto" onClick="scale('{{$dataTarget}}')">
	<img class="center-block" src="<?php echo asset($img) ?>" alt="">
	<div class="text-center">

		<h3 class="gray"><b>{{$marca}}</b> <br> {{$modelo}}</h3>
		
		<h4>Hasta <b>18 CUOTAS SIN INTERÉS</b> de</h4>
		<h4 class="precio violet"><b>{{$precio}}</b></h4>


	</div>
	<hr>

	<p class="precio-lista">*Precio de lista {{$precioLista}}</p>
	
	<a  onClick="scale('{{$dataTarget}}')" class="spa-btn border-btn gray center-block margin-top-25 text-center">VER MÁS</a>

	<div class="ahora-18">				
		<h4 class="gray">												
			<img src="<?php echo asset('storage/img/shop/ahora_18.svg') ?>" alt="">
			<img src="<?php echo asset('storage/img/shop/ahora_18.svg') ?>" alt="">
			HASTA 12 <br> Y 18 CUOTAS
		</h4>
	</div>
	
</div>