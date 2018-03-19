<div class="cargos form">
<?php echo $this->Form->create('Cargo'); ?>
	<fieldset>
		<legend><?php echo __('Add Cargo'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cargos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
