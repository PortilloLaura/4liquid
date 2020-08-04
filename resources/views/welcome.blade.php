@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
	<body>
		
		<div>
			<nav class="imgHome" style="display: flex; align-items: center; text-align: center;">
			</nav>
			<div class="services">
				<div class="code">
					<img src="img/general/coding.png">
					<div class="abrTitle">CL</div>
					<div class="srvTitle">Código limpio</div>
					<div class="srvDescr">Mantener un código limpio y fácil de comprender.</div>
				</div>
				<div class="team">
					<img src="img/general/group.png">
					<div class="abrTitle">ET</div>
					<div class="srvTitle">Equipo de trabajo</div>
					<div class="srvDescr">Nuestro equipo de trabajo se desenvuelve con facilidad.</div>
				</div>
				<div class="kpi">
					<img src="img/general/poll.png">
					<div class="abrTitle">KPI</div>
					<div class="srvTitle">Manejo de KPI</div>
					<div class="srvDescr">Somos capaces de mantener un rendimiento constante.</div>
				</div>
			</div>
		</div>
		<div class="tools">
		<div class="tlsTitle"><span class="abrTitle">Nuestras</span> <span class="srvTitle">Herramientas</span></div>
			<div class="imgTools">
				<img src="img/software/CSS.png">
				<img src="img/software/HTML5.png">
				<img src="img/software/js.png">
				<img src="img/software/BOOTSTRAP.png">
				<img src="img/software/VS.png">
				<img src="img/software/MYSQL.png">
			</div>
		</div>
		<div class="tools">
			<div class="tlsTitle"><span class="abrTitle">Nuestros</span> <span class="srvTitle">Clientes</span></div>
			<div class="imgTools">
				<img src="img/clients/Amazon.png">
				<img src="img/clients/Apple.png">
				<img src="img/clients/GitGub.png">
				<img src="img/clients/Google.png">
				<img src="img/clients/UPS.png">
			</div>
		</div>
		<div class="contact">
			<div class="card border-info mb-3" style="max-width: 18rem;">
  				<div class="card-body text-info">
				  	<h5 class="card-title">¿Aún no sabes qué servicio va mejor contigo?</h5>
    				<p class="card-text">Regístrate para tener acceso a nuestra encuesta exclusiva, ¡tenemos el servicio a tu medida!</p>
					<hr>
					<p class="card-text">Contacto: sapi@sapisolutions.com</p>
  				</div>
			</div>
			<div class="socialmedia">
			<img src="img/brands/Facebook.png">
			<img src="img/brands/Instagram.png">
			<img src="img/brands/LinkedIn.png">
            <img src="img/brands/Twitter.png">
			</div>
		</div>
	</body>
</html>
@endsection

