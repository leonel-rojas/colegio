<div class="seccions form">
<?php echo $this->Form->create('Seccion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Seccion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Seccion.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Seccion.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
