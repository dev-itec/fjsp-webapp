<div>
    <div id="modalEditarClientes" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" data-field="id" value=""/>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre" class="required">Nombre</label>
                            <input id="nombre" type="text" class="form-control" data-field="nombre" placeholder="Nombre" value="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido" class="required">Apellido</label>
                            <input id="apellido" type="text" class="form-control" data-field="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo_identificacion" class="required">Tipo</label>
                            <select id="tipo_identificacion" class="form-control" data-field="tipo_identificacion">
                                <option value="C">Cédula</option>
                                <option value="P">Pasaporte</option>
                                <option value="R">RIF</option>
                                <option value="O">Otro</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="identificacion" class="required">Identificación</label>
                            <input id="identificacion" type="text" class="form-control" data-field="identificacion" placeholder="Identificación">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefono" >Teléfono</label>
                            <input id="telefono" type="text" class="form-control" data-field="telefono" placeholder="Teléfono">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="correo" class="required">Correo</label>
                            <input id="correo" type="email" class="form-control" data-field="correo" placeholder="Correo">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="persona_contacto" >Persona contacto</label>
                            <input id="persona_contacto" type="text" class="form-control" data-field="persona_contacto" placeholder="Persona contacto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="distribuidor" >Distribuidor</label>
                            <input id="distribuidor" type="text" class="form-control" data-field="distribuidor" placeholder="Distribuidor">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="direccion" class="required">Dirección</label>
                            <textarea id="direccion" type="text" class="form-control" data-field="direccion" placeholder="Dirección"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="observaciones" >Observaciones</label>
                            <textarea id="observaciones" type="text" class="form-control" data-field="observaciones" placeholder="Observaciones"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="btnGuardar" class="btn btn-primary">Guardar</button>
                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
