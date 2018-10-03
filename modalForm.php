<div class="modal fade" id="modalForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="app-modal-header modal-header bg-aqua text-white">
					<button class="close" aria-hidden="true" data-dismiss="modal">&times;</button>
					<h3>E-mail <span class="fa fa-inbox"></span></h3>
				</div>
				<div class="modal-body">
					<form action="#" id="form">

						<div class="form-group">
                            <label for="hola" class="col-sm-2 control-label hidden-xs">Empleador:</label>
                            <div class="col-sm-9 col-xs-10 col-xs-offset-1 input-group">
                                <span class="input-group-addon " id="app-input-form">
                                    <div class="app-div-redes">
                                        <i class="fa fa-user texto-blanco"></i>		
                                    </div>
                                </span>
                                <input type="text" class="form-control" id="nombreForm" placeholder="Nombre" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="correo" class="col-sm-2 control-label hidden-xs">Correo:</label>
                            <div class="col-sm-9 col-xs-10 col-xs-offset-1 input-group">
                                <span class="input-group-addon" id="app-input-form">
                                    <div class="app-div-redes">
                                        <i class="fa fa-envelope texto-blanco"></i>		
                                    </div>
                                </span>
                                <input type="email" class="form-control" id="correoForm" placeholder="Correo" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="hola" class="col-sm-2 control-label hidden-xs">Telefono:</label>
                            <div class="col-sm-9 col-xs-10 col-xs-offset-1 input-group">
                                <span class="input-group-addon " id="app-input-form">
                                    <div class="app-div-redes">
                                        <i class="fa fa-phone texto-blanco"></i>		
                                    </div>
                                </span>
                                <input type="number" class="form-control" id="telefonoForm" placeholder="(+XX) XXX-XXX-XXX"  required >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label hidden-xs">Asunto:</label>
                            <div class="col-sm-9 col-xs-10 col-xs-offset-1 input-group">
                                <span class="input-group-addon " id="app-input-form">
                                    <div class="app-div-redes">
                                        <i class="fa fa-commenting texto-blanco"></i>		
                                    </div>
                                </span>
                                <input class="form-control" id="asuntoForm" placeholder="Asunto" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label hidden-xs">Mensaje:</label>
                            <textarea class="form-control" id="mensajeForm" cols="30" rows="10"></textarea>
                        </div>

					</div>
					<div class="app-modal-footer modal-footer bg-gray">
						<input type="button" id="submit" value="Enviar" class="btn btn-success">
						<button class="btn btn-danger" data-dismiss="modal">Salir <span class="fa fa-chevron-circle-right"></span></button>
					</div>
				</form>
			</div>
		</div>
	</div>