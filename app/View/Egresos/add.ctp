<div class="egresos form">
<?php echo $this->Form->create('Egreso'); ?>
	<fieldset>
		<legend><?php echo __('Add Egreso'); ?></legend>
	<?php
		echo $this->Form->input('fecha');
		echo $this->Form->input('tipoegreso_id');
		echo $this->Form->input('monto');
		echo $this->Form->input('Trabajador');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
