@extends('admin.layouts.main')
@section('main')
      <div id="login" style="">
	<div class="wrapper fadeInDown">
	  <div class="formContent">
	    <!-- Tabs Titles -->

	    <!-- Icon -->
	    <div class="fadeIn first">
	      <img class="logo" src="<?php echo asset("storage/img/logo.png")?>" id="icon" alt="User Icon" style="width:200px" />
	    </div>

	    <!-- Login Form -->
	    <form>
			<input class="fadeIn second" type="text" name="username" id="username" placeholder="Ingrese su usuario" value="mcd77.1990@gmail.com">
			<input class="fadeIn third" type="password" name="password" id="password" placeholder="Ingrese password" value="123">

			<a class="form-btn fadeIn fourth" onClick="login()">INGRESAR</a>
			</form>

	    <!-- Remind Passowrd -->
	    <div id="formFooter">
	      <a class="underlineHover" href="http://www.AllSalud.com.ar">www.AllSalud.com.ar</a>
	    </div>

	  </div>
	</div>
</div>
<div class="row main" style="display:none">
	<div class="closeSession">
		<a onClick="logout()">
			<i class="fas fa-power-off"></i>
		</a>
	</div>
<div class=" side-bar col-lg-1 col-md-1 col-sm-1" style="padding:5px"  >
  <img class="logo margin-left-5 center-block" src="<?php echo asset("storage/img/logo.png")?>" id="icon" alt="User Icon" style="width:100%;" />
	<ul>
		<li>
			<a href="/admin/viewListReportes" target="iframe">
				Reportes
			</a>
		</li>
	</ul>
</div>
<div class="pageContent float-left col-lg-11 col-md-11 col-sm-11" >
	  <iframe src="" id="iframe" class="float-left" name="iframe" target="iframe" frameborder="0"></iframe>
</div>
</div>
@stop