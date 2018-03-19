<div class="col-md-12">
	<div class="panel">
			<div class="panel-heading nopaddingbottom">
        <div class="col-md-3 col-md-offset-9">
          <div role="alert" class="gritter-item-wrapper with-icon send-o success mb10">
              <div class="gritter-item">
                <div class="gritter-without-image">
                  <span class="gritter-title"><label class="label label-warning">Perfecto!</label> ya casi finalizamos ( 3 / 3 )</span>
                </div>
                <div style="clear:both"></div>
              </div>
            </div>
          </div>
        <br><br>
				<h4 class="panel-title">DATOS DE ACCESO DEL NUEVO USUARIO</h4>
				<p>Campos requeridos (<span class="text-danger">*</span>) </p>
			</div>
			<div class="panel-body">
				<hr>
				<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'id'=>'basicForm')); ?>
				<!-- <form id="basicForm" class="form-horizontal"> -->

					<div class="form-group">
						<div class="col-sm-4">
							<label for="">Usuario <span class="text-danger">*</span></label>
							<input name="data[User][username]" maxlength="50" type="email" id="UserUsername" class="form-control" placeholder="Ingrese nombre de usuario..." required>
						</div>
						<div class="col-sm-4">
							<label for="">Contraseña <span class="text-danger">*</span></label>
							<input name="data[User][password]" maxlength="10" type="password" id="UserPassword" class="form-control" placeholder="Ingrese contraseña..." required>
						</div>
						<div class="col-sm-4">
							<?php #echo $this->Form->input('rol_id', array('label'=>'Rol <span class="text-danger">*</span>', 'class'=>'form-control')); ?>
							<label for="">Rol <span class="text-danger">*</span></label>
							<select name="data[User][rol_id]" class="form-control" id="RolRolId">
								<option value="1">Administrador</option>
								<option value="2">Normal</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-9 col-sm-offset-3">
							<button class="btn btn-success btn-quirk btn-wide mr5">Guardar</button>
							<button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
						</div>
					</div>
					<br>

				</form>
			</div><!-- panel-body -->
	</div><!-- panel -->

</div><!-- col-md-6 -->
