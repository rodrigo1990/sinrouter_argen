<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.min.css")?>"/>
	<link rel="stylesheet" href="<?php echo asset("css/sucursales.css")?>"/>
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
		<div class="row title-row">
			<div class="container-fluid">
				
			<img class="logo center-block" src="<?php echo asset('storage/img/cotizaciones_sucursales/argencambio-white.svg') ?>" alt="" class="logo">
				
			</div>
		</div>

		<div class="row content-row">
				
				<h1 class="text-center">DÓLAR <img src="<?php echo asset('storage/img/cotizaciones_sucursales/eeuu-flag.png') ?>" alt=""></h1>

				
				<ul class="flex center-block">
					
					<li>
						<div class="nro">
							${{$archivo[4]}}
						</div>
						
						<div class="operacion text-center center-block">
							<b>Compra</b> 
						</div>


					</li>
					<li>

						<div class="nro">
							${{$archivo[5]}}
						</div>
						<div class="operacion text-center center-block">
							<b>Venta</b> 
						</div>
					</li>
				</ul>
				

		</div>

	<footer>

		<ul class="flex center-block">
			<li><h2 class="text-center">www.argenpesos.com.ar</h2></li>
			<li><h2 class="text-center">|</h2></li>
			<li>
					<h2 class="text-center float-left"><i class="fab fa-facebook-f"></i> /argenpesos</h2>		
				
					<h2 class="text-center float-left"><i class="fab fa-instagram"></i> @argenpesos</h2>
			</li>
		</ul>
				
				
				
				
	</footer>

<script>
	setTimeout(function() {
          location.reload();
        }, 300000);
</script>
	
</body>
</html>