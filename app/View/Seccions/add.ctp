<div class="seccions form">
<?php echo $this->Form->create('Seccion'); ?>
	<fieldset>
		<legend><?php echo __('Add Seccion'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Seccions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
