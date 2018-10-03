<div class="modal fade" id="modalUpdate">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="app-modal-header modal-header">
					<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
					<h3>Edit Product <span class="glyphicon glyphicon-inbox"></span></h3>
				</div>
				<div class="modal-body">
					<form action="#" id="formulario">
						<input type="hidden" id="idRow" value="0">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input id="nombre" type="text" class="form-control" placeholder="Nombre" required>
						</div>

						<div class="form-group">
							<label for="descripcion">Descripcion</label>
							<textarea id="descripcion" class="form-control" type="text" value="producto" placeholder="Descripcion"  required></textarea>
						</div>

						<div class="form-group">
							<label for="categoria">Categoria</label> 
							<input id="categoria" type="text" class="form-control" required>		
						</div>

					</div>
					<div class="app-modal-footer modal-footer">
						<input type="button"   value="Edit" class="btn btn-success">
						<button class="btn btn-danger" data-dismiss="modal">Exit <span class="glyphicon glyphicon-off"></span></button>
					</div>
				</form>
			</div>
		</div>
	</div>