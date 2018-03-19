<div class="trabajadors form">
<?php echo $this->Form->create('Trabajador'); ?>
	<fieldset>
		<legend><?php echo __('Edit Trabajador'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('cargo_id');
		echo $this->Form->input('profesion_id');
		echo $this->Form->input('Egreso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Trabajador.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Trabajador.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesions'), array('controller' => 'profesions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesion'), array('controller' => 'profesions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('controller' => 'egresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
