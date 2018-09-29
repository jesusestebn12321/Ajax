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
						alert(response);
						$('#formulario')[0].reset();
					}
				});
			}else{
				alert('Todos los Campos son Requridos');
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
		if (confirm('Seguro que deseas eliminar este articulo')) {
			$.ajax({
				url: 'destroy.php',
				method: 'POST',
				dataType: 'text',
				data: {
					key: 'destroy',
					id: id
				}, success: function (response) {
					alert(response);
					$('#producto'+id).css('display','none');
				}
			});
		}else{
			alert('Su Producto a sido Salvado');
		}
	}

	function isNotEmpty(request) {
		if (request.val() == '') {
			request.css('border', '1px solid red');
			return false;
		} else
		request.css('border', '');

		return true;
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
wow.init();
document.getElementById('moar').onclick = function() {
	var section = document.createElement('section');
	section.className = 'section--purple wow fadeInDown';
	this.parentNode.insertBefore(section, this);
};