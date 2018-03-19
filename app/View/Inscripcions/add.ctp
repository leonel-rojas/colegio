<?php /*
*/ ?>
<div class="col-md-12">
	<div class="panel">
			<div class="panel-heading nopaddingbottom">
        <div class="col-md-3 col-md-offset-9">
          <div role="alert" class="gritter-item-wrapper with-icon send-o success mb10">
              <div class="gritter-item">
                <div class="gritter-without-image">
                  <span class="gritter-title"><label class="label label-warning">Completa</label> los datos personales de Inscripción ( 3 / 3 )</span>
                </div>
                <div style="clear:both"></div>
              </div>
            </div>
          </div>
        <br><br>
				<h4 class="panel-title">DATOS DE INSCRIPCIÓN</h4>
				<p>Campos requeridos (<span class="text-danger">*</span>) </p>
			</div>
			<div class="panel-body">
				<hr>
				<?php echo $this->Form->create('Inscripcion', array('class'=>'form-horizontal', 'id'=>'basicForm')); ?>
				<!-- <form id="basicForm" class="form-horizontal"> -->
					<div class="form-group">
						<label class="col-sm-1 col-sm-offset-2 control-label">Período <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<?php echo $this->Form->input('periodo_id', array('class'=>'form-control', 'label'=>false)); ?>
						</div>

						<label class="col-sm-1 control-label">Turno <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<?php echo $this->Form->input('turno_id', array('class'=>'form-control', 'label'=>false)); ?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-1 col-sm-offset-2 control-label">Curso <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<?php echo $this->Form->input('curso_id', array('class'=>'form-control', 'label'=>false)); ?>
						</div>

						<label class="col-sm-1 control-label">Sección <span class="text-danger">*</span></label>
						<div class="col-sm-2">
							<?php echo $this->Form->input('seccion_id', array('class'=>'form-control', 'label'=>false)); ?>
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
