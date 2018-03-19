<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Edit Persona'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('cedula');
		echo $this->Form->input('nacimiento');
		echo $this->Form->input('email');
		echo $this->Form->input('direccion');
		echo $this->Form->input('foto');
		echo $this->Form->input('foto_dir');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Persona.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Persona.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docents'), array('controller' => 'docents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docent'), array('controller' => 'docents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representants'), array('controller' => 'representants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representant'), array('controller' => 'representants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
