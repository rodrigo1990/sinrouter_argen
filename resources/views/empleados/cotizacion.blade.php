<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.min.css")?>"/>
	<link rel="stylesheet" href="<?php echo asset("css/css/bootstrap.min.css")?>"/>
	<style>
		table{
			font-size: 23px;
    		border: 1px solid lightgrey;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="container-fluid">
			<div class="col-lg-3">
				<img src="<?php echo asset('storage/img/logo-cambio.png') ?>" alt="" class="logo">
			</div>
			<div class="col-lg-9">
				
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">DOLAR COMPRA</th>
			      <th scope="col">DOLAR VENTA</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">DOLAR</th>
			      <td>${{$archivo[4]}}</td>
			      <td>${{$archivo[5]}}</td>
			    </tr>
			  </tbody>
			</table>
		</div>

	</div>

<script>
	setTimeout(function() {
          location.reload();
        }, 900000);
</script>
	
</body>
</html>