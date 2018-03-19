<div class="inscripcions form">
<?php echo $this->Form->create('Inscripcion'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inscripcion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('periodo_id');
		echo $this->Form->input('curso_id');
		echo $this->Form->input('seccion_id');
		echo $this->Form->input('turno_id');
		echo $this->Form->input('alumno_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inscripcion.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Inscripcion.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('controller' => 'seccions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'seccions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Turnos'), array('controller' => 'turnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turno'), array('controller' => 'turnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
