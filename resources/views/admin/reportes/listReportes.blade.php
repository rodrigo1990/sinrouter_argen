@extends('Admin.layouts.iframe')
	@section('main')
		<h1>REPORTES</h1>
		<br><br>
		<div class="row">
			<div class="container-fluid">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<table class="table">
					<thead>
						<tr>
							<th class="text-center">ID</th>
							<th class="text-center">NRO_CREDITO</th>
							<th class="text-center">DOCUMENTO</th>
							<th class="text-center">NOMBRE</th>
							<th class="text-center">EMAIL</th>
							<th class="text-center">TELÉFONO</th>
							<th class="text-center">ESTUDIO</th>
							<th class="text-center">TELEFONO ESTUDIO</th>
							<th class="text-center">NOMBRE DEUDA</th>
							<th class="text-center">SALDO</th>
							<th class="text-center">CANTIDAD CUOTAS ADEUDADAS</th>
							<th class="text-center">FECHA MORA</th>
							<th class="text-center">FECHA DE ACTIVIDAD</th>
						</tr>
					</thead>
					<tbody>
						@if(isset($reportes))
							@foreach($reportes as $reporte)
							<tr>
								<td class="text-center">{{$reporte->id}}</td>
								<td class="text-center">{{$reporte->nro_credito}}</td>
								<td class="text-center">{{$reporte->documento_usuario}}</td>
								<td class="text-center">{{$reporte->nombre_usuario}}</td>
								<td class="text-center">{{$reporte->email_usuario}}</td>
								<td class="text-center">{{$reporte->telefono_usuario}}</td>
								<td class="text-center">{{$reporte->estudio_asignado}}</td>
								<td class="text-center">{{$reporte->telefono_estudio_asignado}}</td>
								<td class="text-center">{{$reporte->nombre_deuda}}</td>
								<td class="text-center">{{$reporte->saldo}}</td>
								<td class="text-center">{{$reporte->cantidad_cuotas_adeudadas}}</td>
								<td class="text-center">{{$reporte->fecha_mora}}</td>
								<td class="text-center">{{$reporte->fecha_actividad}}</td>
							</tr>

							@endforeach
						@endif
					</tbody>
				</table>
				</div>

			</div>
		</div>
	
		

	@stop
	

	@section('scripts')
		@include('Admin.inc.showOperationMessage')
		


	@stop