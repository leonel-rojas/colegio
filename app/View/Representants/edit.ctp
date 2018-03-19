<div class="representants form">
<?php echo $this->Form->create('Representant'); ?>
	<fieldset>
		<legend><?php echo __('Edit Representant'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('profesion_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Representant.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Representant.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Representants'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesions'), array('controller' => 'profesions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesion'), array('controller' => 'profesions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
