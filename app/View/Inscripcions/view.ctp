<div class="inscripcions view">
<h2><?php echo __('Inscripcion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inscripcion['Inscripcion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($inscripcion['Inscripcion']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Periodo']['id'], array('controller' => 'periodos', 'action' => 'view', $inscripcion['Periodo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['Curso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Seccion']['id'], array('controller' => 'seccions', 'action' => 'view', $inscripcion['Seccion']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Turno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Turno']['id'], array('controller' => 'turnos', 'action' => 'view', $inscripcion['Turno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscripcion['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['Alumno']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscripcion'), array('action' => 'edit', $inscripcion['Inscripcion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscripcion'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('action' => 'add')); ?> </li>
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
