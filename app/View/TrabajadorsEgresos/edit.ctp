<div class="trabajadorsEgresos form">
<?php echo $this->Form->create('TrabajadorsEgreso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trabajadors Egreso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('trabajador_id');
		echo $this->Form->input('egreso_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TrabajadorsEgreso.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('TrabajadorsEgreso.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Trabajadors Egresos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('controller' => 'egresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
