<div class="ingresos form">
<?php echo $this->Form->create('Ingreso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ingreso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('periodo_id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('monto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ingreso.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Ingreso.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ingresos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesespagos'), array('controller' => 'mesespagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesespago'), array('controller' => 'mesespagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
