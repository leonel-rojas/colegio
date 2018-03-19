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
					<?php echo $this->Form->input('id'); ?>
					<div class="form-group">
						<label class="col-sm-1 control-label">Cédula <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<?php echo $this->Form->input('cedula', array('type' => 'number', 'maxlength' => 8, 'class' => 'form-control', 'placeholder' => 'Ingrese cédula...', 'required', 'label'=>false)); ?>
						</div>

						<label class="col-sm-1 control-label">Nombre <span class="text-danger">*</span></label>
						<div class="col-sm-3">
							<?php echo $this->Form->input('nombre', array('maxlength' => 50, 'class' => 'form-control', 'placeholder' => 'Ingrese nombre...', 'required', 'label'=>false)); ?>
						</div>

						<label class="col-sm-1 control-label">Apellido <span class="text-danger">*</span></label>
						<div class="col-sm-3">
							<?php echo $this->Form->input('apellido', array('maxlength' => 50, 'class' => 'form-control', 'placeholder' => 'Ingrese apellido...', 'required', 'label'=>false)); ?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-1 control-label">F. N. <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<?php echo $this->Form->input('nacimiento', array('type' => 'text', 'class' => 'form-control', 'placeholder' => 'Ingrese fecha de nacimiento...', 'required', 'label'=>false)); ?>
						</div>

						<label class="col-sm-1 control-label">Celular <span class="text-danger">*</span></label>
						<div class="col-sm-3">
							<?php echo $this->Form->input('celular', array('maxlength' => 11, 'class' => 'form-control', 'placeholder' => 'Ingrese N° de Celular...', 'required', 'label'=>false)); ?>
						</div>

						<label class="col-sm-1 control-label">Foto </label>
						<div class="col-sm-3">
							<?php echo $this->Form->input('foto', array('class'=>'form-control', 'label'=>false, 'readonly')); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-1">
							<?php echo $this->Form->input('direccion', array('class' => 'form-control', 'placeholder' => 'Ingrese dirección...', 'required', 'label'=>false)); ?>
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
