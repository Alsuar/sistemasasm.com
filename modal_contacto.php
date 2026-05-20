<div id="modal_contacto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar ventana de contacto">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Solicita una demostración!</h4>
      </div>
      <div class="modal-body">
        <div class="row sep" style="padding-left: 20px;">
          <div class="col-lg-10 col-md-02 col-sm-10 col-xs-10">
            <p>Registrate en 5 Minutos</p>
            <p class="text-muted">Gratis, Sin Obligaciones.</p>
          </div>
          <div class="col-lg-10 col-md-02 col-sm-10 col-xs-10">
            <form name="signupForm" id="signupForm">
              <div class="input-group margin-bottom-20" style="margin-top: 20px;">
                  <span class="input-group-addon" style="padding: 0 12px; background-color: #ffffff;">
                    <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
                  </span>
                  <label for="empresa1" class="sr-only">Empresa o nombre</label>
                  <input type="text" name="empresa" id="empresa1" ng-model="empresa1" class="form-control" placeholder="Empresa / Nombre">
              </div>
              <div class="input-group margin-bottom-20">
                  <span class="input-group-addon" style="padding: 0 12px; background-color: #ffffff;">
                    <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                  </span>
                  <label for="email1" class="sr-only">Correo electrónico</label>
                  <input type="email" name="email" id="email1" ng-model="email1" class="form-control" placeholder="Email">
              </div>
              <div class="input-group margin-bottom-20">
                  <span class="input-group-addon" style="padding: 0 12px; background-color: #ffffff;">
                    <i class="glyphicon glyphicon-phone" aria-hidden="true"></i>
                  </span>
                  <label for="telefono1" class="sr-only">Número de teléfono</label>
                  <input type="number" name="telefono1" id="telefono1" ng-model="telefono" class="form-control" placeholder="Número">
              </div>
              <div class="input-group margin-bottom-20">
                  <span class="input-group-addon" style="padding: 0 12px; background-color: #ffffff;">
                    <i class="glyphicon glyphicon-comment" aria-hidden="true"></i>
                  </span>
                  <label for="mensaje1" class="sr-only">Mensaje</label>
                  <textarea class="form-control" id="mensaje1" placeholder="Mensaje"></textarea>
              </div>
          </div>
        </div> 
      </div>
      <div class="modal-footer">
          <div class="pull-right">
            <button class="btn btn-primary" type="reset">Limpiar Formulario</button>
            <button type="button" id="btn_contacto_ban_send" class="btn btn-primary btn-md" style="background-color: #8dc635; border-color: #8dc635">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>