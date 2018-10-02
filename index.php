
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">    
	<title> Curriculum Vitae </title>
	<link rel="shortcut icon" href="img/portafolio.ico" />
	<!-- Styles -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/redes.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Scripts -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="sweetalert/docs/assets/sweetalert/sweetalert.min.js"></script>
	<script src="js/vendor/jquery-1.11.2.min.js"></script>
</head>
<body>
	<?php include('modal.php'); ?>
	<?php include('modalUpdate.php'); ?>
	<header >
		<nav class="navbar app-navbar" id="app-nav-border">
			<div class="container">
				<div class="navbar-header">
					<div class="row wow shake" data-wow-offset="300">
						<div class="col-xs-2 col-xs-offset-1 col-sm-offset-0 col-lg-offset-0 col-sm-1">
							<img class="app-img-titulo" style="margin-left: -50px;" src="img/manual.png">
						</div>
						<div class="col-xs-2 col-xs-offset-1 col-sm-offset-0 col-lg-offset-0">
							<a href="#" class="app-centrar col-xs-offset-1" >Curriculum</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<section>
			<div class="container-fluid">
				<div class="row">
					<div class="app-centrar-imgP col-xs-12 col-lg-6 wow swing" data-wow-offset="300">
						<img class="app-imagen-personal" src="img/imgPersonal.jpg" alt="imagen personal">
					</div>
					<div class="app-centrar-nombre col-xs-12 col-xs-offset-2 col-sm-offset-0 col-lg-offset-0 col-lg-6" ">
						<div class="wow bounce" data-wow-offset="300">
							<p class="app-titulo-nombre"><h3> Jesus Esteban Villalta Gonzalez</h3></p>
							<p class="app-separador-name"></p>
						</div>
						<ul class="wow flash" data-wow-offset="300">
							<li class="list-group-item" style="padding: none;background: none;border:none;"><h4>Programador <i class="fa fa-code"></i> </h4></li>
							<li class="list-group-item" style="padding: none;background: none;border:none;"><h4>Diseñador Web <i class="fa fa-code"></i> </h4></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</header>

	<section style="width:100px;">
		<div>
			<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#miModal"> Nuevo Producto <span class="fa fa-upload"></span>	</a>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				
			
		<table id="tabla" class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th></th>
				</tr>
			</thead>
		<?php 
			$conn = new mysqli('localhost', 'root', '', 'ajax');
			$sql = $conn->query("SELECT * FROM producto");
			
				while($data = $sql->fetch_array()) {
					echo '
						<tr id="producto'.$data["id"].'">
							<td>'.$data["id"].'</td>
							<td>'.$data["nombre"].'</td>
							<td>'.$data["categoria"].'</td>
							<td>'.$data["descripcion"].'</td>
							<td>
								<input type="button" data-toggle="modal" data-target="#modalUpdate"  value="Edit" class="btn btn-primary">
								<input type="button" value="View" class="btn">
								<input type="button" onclick="destroy('.$data["id"].')" id="delete" value="Destroy" class="btn btn-danger">	
							</td>
						</tr>
					';
				}
			
		?>
			<tbody id="tableBody">

			</tbody>
		</table>
			</div>
		</div>
	</section>



</body>
<footer class="app-footer">
	<div class="app-footer-border" style=" ">
		<div class="container">
			<div class="row py-4 d-flex">
				<div class="col-md-6 col-xs-12 col-lg-5 text-center text-md-left mb-4 mb-md-0">
					<h4 class="mb-0 app-h4">Jesus Esteban Villalta Gonzalez CV</h4>
				</div>
				<div class="col-md-6 col-xs-12 col-xs-pull-0 col-lg-7 text-center text-md-right wow tada" data-wow-duration="3800ms">
					<a class="app-rotar app-icono-redes" href="https://www.facebook.com/esteban.villalta.SK8" data-toggle="tooltip" data-placement="bottom" title="Facebook" target="_black">
						<i class="fa fa-facebook  mr-4" style="color:white"> </i>
					</a>
					<a class="app-rotar app-icono-redes" href="https://github.com/jesusestebn12321" data-toggle="tooltip" data-placement="bottom" title="GitHub" target="_black">
						<i class="fa fa-git  mr-4" style="color:white"> </i>
					</a>
					<a class="app-rotar app-icono-redes" href="https://www.linkedin.com/in/jesus-esteban-villalta-12b11915a" data-toggle="tooltip" data-placement="bottom" title="Linkedin" target="_black">
						<i class="fa fa-linkedin  mr-4" style="color:white"> </i>
					</a>
					<a class="app-rotar app-icono-redes" id="id" href="https://www.instagram.com/esteban_jvg.sk8" data-toggle="tooltip" data-placement="bottom" title="Instagram" target="_black">
						<i class="fa fa-instagram " style="color:white"> </i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container text-center text-md-left mt-5 " >
		<div class="row mt-3">
			<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" ></div>
			<div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-md-0 mb-4">
				<h6 class="text-uppercase text-white">Contactos</h6>
				<p class="app-separador"></p>
				<p class="text-white">
					<i class="fa fa-home mr-3"></i> Venezuela, Edo Guarico, San Juan De Los Morros.</p>
					<p class="text-white">
						<i class="fa fa-envelope mr-3"></i> jesusesteban12321@gmail.com</p>
						<p class="text-white">
							<i class="fa fa-whatsapp mr-3"></i> +58 412-480-84-94</p>
							<p class="text-white">
								<i class="fa fa-telegram mr-3"></i> +58 426-334-49-23</p>
							</div>
							<div class="col-md-3 col-lg-3 col-xl-6 mx-auto mb-md-0 mb-4" ></div>
						</div>
					</div>
					<div class="text-center py-3 app-copy">©2018 Copyright:
						<a href="#!"> JesusVillaltaCV</a>
					</div>
					<input type="button" class="btn btn-danger" id="boton1" value="hola">
				</footer>     
				<!-- Scripts   -->
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
$(document).ready(function(){

	
});
	 function MostrarProducto() {
            $.ajax({
                url: 'ajax.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getExistingData',
                    : ,
                    : 
                }, success: function (response) {
                    if (response != "reachedMax") {
                        $('#tableBody').append(response);
                         += ;
                        MostrarProducto();
                    }
                }
            });
        }
</script>
</html>
