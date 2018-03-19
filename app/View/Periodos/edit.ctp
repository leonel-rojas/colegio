<div class="periodos form">
<?php echo $this->Form->create('Periodo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Periodo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('desde');
		echo $this->Form->input('hasta');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Periodo.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Periodo.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('controller' => 'tarjetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
	</ul>
</div>
