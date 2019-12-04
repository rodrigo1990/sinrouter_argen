<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php 
		$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
 		?>
	<link rel="stylesheet" href="<?php echo $actual_link."/admin/bootstrap-3.3.7-dist/css/bootstrap.min.css" ?>">
	<link rel="stylesheet" href="admin/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo $actual_link."/admin/estilos/estilos.css"?>">
	<link rel="stylesheet" href="admin/estilos/croppic.css">
	<style>
	

	</style>
</head>
