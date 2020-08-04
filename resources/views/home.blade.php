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
    			<p class="card-text">¡Realiza nuestra encuesta!</p>
    			<button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#encuestaModal" data-whatever="@getbootstrap">Obtener Recomendaciones</button>
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



<!--#######################----------INICIA MODAL------###########################################-->
<div class="modal fade" id="encuestaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Recomendaciones</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form>
		          <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Giro de la empresa</label>
		            <select class="form-control" id="exampleFormControlSelect1">
		              <option selected>Seleccionar...</option>
				      <option>Electricidad</option>
				      <option>Cobranzas</option>
				      <option>Telecomunicaciones</option>
				      <option>Construcción</option>
				      <option>Ventas</option>
				      <option>Otras</option>
				    </select>
		          </div>

		          <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Tamaño de la empresa</label>
		            <select class="form-control" id="opt-form-empresa">
		              <option selected>Seleccionar...</option>
				      <option>Grande</option>
				      <option>Mediano</option>
				      <option>Pequeño</option>
				    </select>
		          </div>

		          <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Cuenta con algún sofware acual?</label>
		            <div class="form-check">
					  <input class="form-check-input position-static" type="radio" name="opt-form-software" id="blankRadio1" value="option1" aria-label="...">  
					  <label class="form-check-label" >
			            No
			          </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input position-static" type="radio" name="opt-form-software" id="blankRadio2" value="option2" aria-label="...">
					  <label class="form-check-label" >
			            Sí
			          </label>
					</div>
		          </div>

				 <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Cuenta con algún departamento de TI?</label>
		            <div class="form-check">
					  <input class="form-check-input position-static" type="radio" name="opt-form-departamento" id="blankRadio1" value="option1" aria-label="...">  
					  <label class="form-check-label" for="gridRadios1">
			            No
			          </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input position-static" type="radio" name="opt-form-departamento" id="blankRadio1" value="option1" aria-label="...">
					  <label class="form-check-label" for="gridRadios1">
			            Sí
			          </label>
					</div>
		          </div>

  				<div class="form-group">
		            <label for="recipient-name" class="col-form-label">Funcionalidad deseada</label>
		            <select class="form-control" id="opt-form-funcionalidad">
		              <option selected>Seleccionar</option>
				      <option>Ventas</option>
				      <option>Publicidad</option>
				      <option>Control de inventarios</option>
				      <option>Otro</option>
				    </select>
		          </div>

				<div class="form-group">
		            <label for="recipient-name" class="col-form-label">Desea actualizaciones constantes?</label>
		           <div class="form-check">
					  <input class="form-check-input position-static" type="radio" name="opt-form-update" id="blankRadio1" value="option1" aria-label="...">
					  <label class="form-check-label" for="gridRadios1">
			            Sí
			          </label>
					</div>

			          <div class="form-check">
					  <input class="form-check-input position-static" type="radio" name="opt-form-update	<" id="blankRadio1" value="option1" aria-label="...">
					  <label class="form-check-label" for="gridRadios1">
			            No
			          </label>
					</div>
		          </div>

				  <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Cantidad de clientes que tiene actualmente?</label>
		            <select class="form-control" id="opt-form-clientes">
		              <option selected>Promociones</option>
				      <option>Menos de 50</option>
				      <option>Entre 50 y 100</option>
				      <option>Mas de 100</option>
				    </select>
		          </div>

		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <button id="btn-finish" type="button" class="btn btn-primary">Aceptar</button>
		      </div>
		    </div>
		  </div>
		</div>
<!--#######################----------TERMINA MODAL------###########################################-->





		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!--#######################----------INICIA SCRIPT------###########################################-->
	<!--Libreria sweet alert-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<!--codigo encuesta-->
	<script type="text/javascript">
	$("#btn-finish").on("click", function(){
	var sizeBussines = $("#opt-form-empresa").val();
	var qtyClient = $("#opt-form-clientes").val();

	var appRecom;
	var qtyRecom;

	//Tamaño de la empresa
	if (sizeBussines == 'Grande') {
		appRecom = 'web y movil';
	} 
	else if (sizeBussines == 'Mediano') {
		appRecom = 'movil';
	}
	else{
		appRecom = 'web';
	}
	
	//Cantiddd de clientes
	if (qtyClient == 'Menos de 50') {
		qtyRecom = 'local';
	} 
	else if (qtyClient == 'Entre 50 y 100') {
		qtyRecom = 'en la nube';
	}
	else{
		qtyRecom = 'en la nube';
	}


	Swal.fire({
	  title: 'Listo!',
	  icon: 'success',
	  html: 'De acuerdo a tus resultados te recomendamos: <br><br>'+
	  		'Una aplicación <span id="app">'+appRecom+'<span>, ' +
	  		'con base de datos <span id="sizeDb">'+qtyRecom+'</span> ' + 
	  		'para satisface las necesidades de tu empresa. <br><br>' + 
	  		'Contáctanos para mas información! <br>'+
			'Sapi@sapisolutions.com'
	});
});
</script>
<!--#######################----------TERMINA SCRIPT------###########################################-->

	</body>
</html>
@endsection

