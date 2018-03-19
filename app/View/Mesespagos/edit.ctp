<div class="mesespagos form">
<?php echo $this->Form->create('Mesespago'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mesespago'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tarjeta_id');
		echo $this->Form->input('ingreso_id');
		echo $this->Form->input('condicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mesespago.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Mesespago.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Mesespagos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('controller' => 'tarjetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingresos'), array('controller' => 'ingresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingreso'), array('controller' => 'ingresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
