<div class="col-md-12">
	<div class="panel">
			<div class="panel-heading nopaddingbottom">
				<h4 class="panel-title">CAMBIAR CONTRASEÑA</h4>
				<p>Campos requeridos (<span class="text-danger">*</span>) </p>
			</div>
			<div class="panel-body">
				<hr>
				<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'id'=>'basicForm')); ?>
				<!-- <form id="basicForm" class="form-horizontal"> -->

					<div class="form-group">
						<div class="col-sm-4">
							<label for="">Contraseña <span class="text-danger">*</span></label>
							<?php echo $this->Form->input('id'); ?>
							<?php echo $this->Form->input('password',
							array(
								'label'=> array('text'=>'', 'class'=>'control-label col-sm-4'),
								'class'=>'form-control',
								'autofocus'=>'true',
								'value'=>''
							)); ?>
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
