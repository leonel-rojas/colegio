<div class="inscripcions index">
	<h2><?php echo __('Inscripcions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('curso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('seccion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('turno_id'); ?></th>
			<th><?php echo $this->Paginator->sort('alumno_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inscripcions as $inscripcion): ?>
	<tr>
		<td><?php echo h($inscripcion['Inscripcion']['id']); ?>&nbsp;</td>
		<td><?php echo h($inscripcion['Inscripcion']['fecha']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Periodo']['id'], array('controller' => 'periodos', 'action' => 'view', $inscripcion['Periodo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Curso']['id'], array('controller' => 'cursos', 'action' => 'view', $inscripcion['Curso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Seccion']['id'], array('controller' => 'seccions', 'action' => 'view', $inscripcion['Seccion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Turno']['id'], array('controller' => 'turnos', 'action' => 'view', $inscripcion['Turno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $inscripcion['Alumno']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscripcion['Inscripcion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscripcion['Inscripcion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('action' => 'add')); ?></li>
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
