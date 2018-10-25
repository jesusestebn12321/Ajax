$(document).ready(function(){
	$('#practicas').click(function(){
		var nombre= $('#nombre');
		var descripcion= $('#descripcion');
		var categoria= $('#categoria');
		if (isNotEmpty(nombre) && isNotEmpty(descripcion) && isNotEmpty(categoria)) {
			$.ajax({
				url: 'controllers/controllers.php',
				method: 'POST',
				dataType: 'text',
				data: {
					key: 'add',
					nombre: nombre.val(),
					descripcion: descripcion.val(),
					categoria: categoria.val()
				}, success: function (response) {
					swal(response , {
						icon:"success",
					});
					$('#formulario')[0].reset();
				}
			});
		}else{
			swal('todos los campos son requeridos',{
				icon:"info",
			});
		}
	});
	$('#submit').click(function(){
		var nombreForm=$('#nombreForm');
		var correoFrom=$('#correoForm');
		var telefonoForm=$('#telefonoForm');
		var asuntoForm=$('#asuntoForm');
		var mensajeForm=$('#mensajeForm');
		if (isNotEmpty(nombreForm) && isNotEmpty(correoFrom) && isNotEmpty(telefonoForm) && isNotEmpty(asuntoForm) && isNotEmpty(mensajeForm)) {
			$.ajax({
				url: 'controllers/controllersForm.php',
				method: 'POST',
				dataType: 'text',
				data: {
					key: 'enviar',
					nombre: nombreForm.val(),
					email: correoFrom.val(),
					telefono: telefonoForm.val(),
					asunto:asuntoForm.val(),
					mensaje:mensajeForm.val()
				}, success: function (response) {
					swal(response , {
						icon:"success",
					});
					$('#form')[0].reset();
				}
			});
		}else{
			swal('todos los campos son requeridos',{
				icon:"info",
			});
		}
	});

});



function store(request){
	var nombre= $('#nombreRow'+request);
	var descripcion= $('#descripcionRow'+request);
	var categoria= $('#categoriaRow'+request);
	var id=$('#idRow'+request);
	$.ajax({
		type: "POST",
		url: "controllers/edit.php",
		dataType: "text",
		data:{
			
			key:'edit',
			nombre:nombre.val(),
			descripcion:descripcion.val(),
			categoria:categoria.val(),
			id:id.val(),
		},success: function(response) {
			swal(response, {
				icon:"success",
			});
		}
	});	
}

function destroy(id) {
	swal({
		title: "¿Desea eliminar este registro?",
		text: "el registro se eliminara en caso de que precione OK!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: 'controllers/destroy.php',
				method: 'POST',
				dataType: 'text',
				data: {
					key: 'destroy',
					id: id
				},success: function (response) {
					$('#'+id).addClass('hidden');
					swal(response, {
						icon: "success",
					});
				}
			});
		}else{
			swal("El registro esta a salvo!",{
				icon:"info",
			});
		}
	});
}
function isNotEmpty(request) {
	if (request.val() == '') {
		request.css('border', '1px solid red');
		return false;
	}else{
		request.css('border', '');
		return true;
	}
}
$('[data-toggle="tooltip"]').tooltip();