
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">    
	<title> Ajax CRUD </title>
	<link rel="shortcut icon" href="img/portafolio.ico" />
	<!-- Styles -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="./css/redes.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatables/dataTables.bootstrap.css"/>
 
	<!-- Scripts -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="sweetalert/docs/assets/sweetalert/sweetalert.min.js"></script>
	<script src="js/vendor/jquery-1.11.2.min.js"></script>
</head>
<body>
	<?php include('views/modal.php');?>
	<?php include('views/modalForm.php');?>
	<header >
		<nav class="navbar app-navbar" id="app-nav-border">
			<div class="container">
				<div class="navbar-header">
					<div class="row wow shake" data-wow-offset="300">
						<div class="col-xs-2 col-xs-offset-1 col-sm-offset-0 col-lg-offset-0 col-sm-1">
							<img class="app-img-titulo" style="margin-left: -50px;" src="img/manual.png">
						</div>
						<div class="col-xs-2 col-xs-offset-1 col-sm-offset-0 col-lg-offset-0">
							<a href="#" class="app-centrar col-xs-offset-1" >Ajax</a>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
	</header>

	<section style="width:100px;margin-top:50px">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#miModal"> Nuevo Producto <span class="fa fa-upload"></span>	</a>
				</div>
				<div class="col-lg-6">
					<a href="#" class="btn btn-info" data-toggle="modal" data-target="#modalForm"> Enviar un E-mail <span class="fa fa-envelope "></span>	</a>
				</div>
				<div class="col-lg-6">
					<a href="#" class="btn btn-warning" id='vista'> vista 	</a>
				</div>
				<div class="col-lg-6">
					<a href="#" class="btn btn-success" id='tabla'> tabla 	</a>
				</div>
			</div>
		</div>
	</section>
	
	<section  style="margin-top:50px;">
		<div class="container">
			<div id='contenido' class="row">
				<div >

				</div>
			
		
			</div>
		</div>
	</section>
	<section>
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
				</footer>     
				<!-- Scripts   -->
				<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="datatables/jquery.dataTables.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="datatables/dataTables.bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
	$(document).ready(function(){

	MostrarProducto(0,1);
	$('#vista').click(function(){
		$("#contenido").load("views/vista.php");
		
	});
	$('#tabla').click(function(){
		$("#contenido").load("views/table.php");
		
	});

});
	 function MostrarProducto(start, limit) {	
		$.ajax({
			url: 'controllers/ver.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getProducto',
                    start: start ,
                    limit: limit,
                }, success: function (response) {
                    if (response != " ") {
                        $('tbody').append(response);
						start+= limit ;
						MostrarProducto(start,limit);
						$('.table').DataTable();
                        
                    }else{
					}
                }
            });
        }
</script>
</html>
