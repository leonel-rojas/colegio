<?php /*
*/ ?>
<div class="col-md-12">
	<div class="panel">
			<div class="panel-heading nopaddingbottom">
        <div class="col-md-3 col-md-offset-9">
          <div role="alert" class="gritter-item-wrapper with-icon send-o success mb10">
              <div class="gritter-item">
                <div class="gritter-without-image">
                  <span class="gritter-title"><label class="label label-warning">Completa</label> el siguiente formulario ( 1 / 2 )</span>
                </div>
                <div style="clear:both"></div>
              </div>
            </div>
          </div>
        <br><br>
				<h4 class="panel-title">DATOS PERSONALES</h4>
				<p>Campos requeridos (<span class="text-danger">*</span>) </p>
			</div>
			<div class="panel-body">
				<hr>
				<?php echo $this->Form->create('Persona', array('class'=>'form-horizontal', 'id'=>'basicForm')); ?>
				<!-- <form id="basicForm" class="form-horizontal"> -->
					<div class="form-group">
						<label class="col-sm-1 control-label">Cédula <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<input name="data[Persona][cedula]" maxlength="8" type="text" id="PersonaCedula" class="form-control" placeholder="Ingrese cédula..." required>
						</div>

						<label class="col-sm-1 control-label">Nombre <span class="text-danger">*</span></label>
						<div class="col-sm-3">
							<input name="data[Persona][nombre]" maxlength="50" type="text" id="PersonaNombre" class="form-control" placeholder="Ingrese nombre..." required>
						</div>

						<label class="col-sm-1 control-label">Apellido <span class="text-danger">*</span></label>
						<div class="col-sm-3">
							<input name="data[Persona][apellido]" maxlength="50" type="text" id="PersonaApellido" class="form-control" placeholder="Ingrese apellido..." required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-1 control-label">F. N. <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<input name="data[Persona][nacimiento]" type="date" id="PersonaNacimiento" class="form-control" placeholder="Ingrese fecha de nacimiento..." required>
						</div>

						<label class="col-sm-1 control-label">Celular <span class="text-danger">*</span></label>
						<div class="col-sm-3">
							<input name="data[Persona][celular]" maxlength="11" type="text" id="PersonaCelular" class="form-control" placeholder="Ingrese nro. celular..." required>
						</div>

						<label class="col-sm-1 control-label">Foto </label>
						<div class="col-sm-3">
							<input name="data[Persona][foto]" maxlength="100" type="text" id="PersonaFoto" class="form-control" placeholder="Seleccione foto...">
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-1">
							<textarea name="data[Persona][direccion]" id="PersonaDireccion" class="form-control" placeholder="Ingrese dirección..." required rows="8" cols="40"></textarea>
						</div>
					</div>



					<div class="row">
						<div class="col-sm-9 col-sm-offset-3">
							<button class="btn btn-success btn-quirk btn-wide mr5">Guardar</button>
							<button type="reset" class="btn btn-quirk btn-wide btn-default">Reset</button>
						</div>
					</div>

				</form>
			</div><!-- panel-body -->
	</div><!-- panel -->

</div><!-- col-md-6 -->
