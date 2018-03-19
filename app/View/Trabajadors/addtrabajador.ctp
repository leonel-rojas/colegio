<?php /*
*/ ?>
<div class="col-md-12">
	<div class="panel">
			<div class="panel-heading nopaddingbottom">
        <div class="col-md-3 col-md-offset-9">
          <div role="alert" class="gritter-item-wrapper with-icon send-o success mb10">
              <div class="gritter-item">
                <div class="gritter-without-image">
                  <span class="gritter-title"><label class="label label-warning">Vas bien!</label> contunúa con este formulario ( 2 / 3 )</span>
                </div>
                <div style="clear:both"></div>
              </div>
            </div>
          </div>
        <br><br>
				<h4 class="panel-title">DATOS LABORALES DEL NUEVO USUARIO</h4>
				<p>Campos requeridos (<span class="text-danger">*</span>) </p>
			</div>
			<div class="panel-body">
				<hr>
				<?php echo $this->Form->create('Trabajador', array('class'=>'form-horizontal', 'id'=>'basicForm')); ?>
				<!-- <form id="basicForm" class="form-horizontal"> -->
					<div class="form-group">
						<div class="col-sm-3 col-sm-offset-4">
							<?php echo $this->Form->input('cargo_id', array('label'=> 'Cargo <span class="text-danger">*</span>', 'class'=>'form-control')); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-3 col-sm-offset-4">
							<?php echo $this->Form->input('profesion_id', array('label'=>'Profesión <span class="text-danger">*</span>', 'class'=>'form-control')); ?>
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




<?php /*
<div class="trabajadors form">
<?php echo $this->Form->create('Trabajador'); ?>
	<fieldset>
		<legend><?php echo __('Add Trabajador'); ?></legend>
	<?php
		echo $this->Form->input('persona_id');
		echo $this->Form->input('cargo_id');
		echo $this->Form->input('profesion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trabajadors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesions'), array('controller' => 'profesions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesion'), array('controller' => 'profesions', 'action' => 'add')); ?> </li>
	</ul>
</div>
*/ ?>
