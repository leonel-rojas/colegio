<div class="egresos form">
<?php echo $this->Form->create('Egreso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Egreso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('tipoegreso_id');
		echo $this->Form->input('monto');
		echo $this->Form->input('Trabajador');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Egreso.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Egreso.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipoegresos'), array('controller' => 'tipoegresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoegreso'), array('controller' => 'tipoegresos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
