<?php /*
*/ ?>
<div class="col-md-12">
	<div class="panel">
			<div class="panel-heading nopaddingbottom text-center">
				<h4 class="panel-title">BUSCAR REPRESENTANTE</h4>
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
					</div>

					<div class="row">
						<div class="col-sm-9 col-sm-offset-3">
							<button class="btn btn-success btn-quirk btn-wide mr5">Buscar</button>
						</div>
					</div>

				</form>
			</div><!-- panel-body -->
	</div><!-- panel -->

</div><!-- col-md-6 -->
