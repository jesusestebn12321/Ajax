$(document).ready(function(){
	$('#practicas').click(function(){
		var nombre= $('#nombre');
		var descripcion= $('#descripcion');
		var categoria= $('#categoria');
		if (isNotEmpty(nombre) && isNotEmpty(descripcion) && isNotEmpty(categoria)) {
			$.ajax({
				url: 'controllers.php',
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
});
		
function upData(id){
	var nombre= $('#nombre');
	var descripcion= $('#descripcion');
	var categoria= $('#categoria');
	var id=id;
			// if (isNotEmpty(nombre) && isNotEmpty(descripcion) && isNotEmpty(categoria)) {
			// 	$.ajax({
			// 		url: 'upDate.php',
			// 		method: 'POST',
			// 		dataType: 'text',
			// 		data: {
			// 			key: 'upDate',
			// 			id: id,
			// 			nombre: $nombre.val(),
			// 			descripcion: $descripcion.val(),
			// 			categoria: $categoria.val()
			// 		}, success: function (response) {
			// 			alert(response);
			// 			$('#producto'+id).css('display','none');
			// 		}
			// 	});
			// }else{
			// 	alert('Todos los Campos son Requridos');
			// }
}
function destroy(id) {
	swal({
		title: "¿Desea eliminar este registro?",
		text: "el registro se eliminara en caso de que precione OK!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
		customClass: 'wow tada'
	}).then((willDelete) => {
		if (willDelete) {
			$.ajax({
				url: 'destroy.php',
				method: 'POST',
				dataType: 'text',
				data: {
					key: 'destroy',
					id: id
				},Success: function (response) {
					swal(response, {
						icon: "success",
					});	
					$('#producto'+id).css('display','none');
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
wow = new WOW(
{
	animateClass: 'animated',
	offset:       100,
	callback:     function(box) {
		console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
	}
}
);
