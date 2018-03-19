<div class="tarjetas form">
<?php echo $this->Form->create('Tarjeta'); ?>
	<fieldset>
		<legend><?php echo __('Add Tarjeta'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('periodo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tarjetas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesespagos'), array('controller' => 'mesespagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesespago'), array('controller' => 'mesespagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
