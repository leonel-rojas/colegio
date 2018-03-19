<div class="tipoegresos form">
<?php echo $this->Form->create('Tipoegreso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipoegreso'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipoegreso.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Tipoegreso.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipoegresos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('controller' => 'egresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
