<div class="seccions view">
<h2><?php echo __('Seccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($seccion['Seccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($seccion['Seccion']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Seccion'), array('action' => 'edit', $seccion['Seccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Seccion'), array('action' => 'delete', $seccion['Seccion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $seccion['Seccion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Seccions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inscripcions'); ?></h3>
	<?php if (!empty($seccion['Inscripcion'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Periodo Id'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Turno Id'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($seccion['Inscripcion'] as $inscripcion): ?>
		<tr>
			<td><?php echo $inscripcion['id']; ?></td>
			<td><?php echo $inscripcion['fecha']; ?></td>
			<td><?php echo $inscripcion['periodo_id']; ?></td>
			<td><?php echo $inscripcion['curso_id']; ?></td>
			<td><?php echo $inscripcion['seccion_id']; ?></td>
			<td><?php echo $inscripcion['turno_id']; ?></td>
			<td><?php echo $inscripcion['alumno_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inscripcions', 'action' => 'view', $inscripcion['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inscripcions', 'action' => 'edit', $inscripcion['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inscripcions', 'action' => 'delete', $inscripcion['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inscripcion['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
