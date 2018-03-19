<div class="periodos view">
<h2><?php echo __('Periodo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($periodo['Periodo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($periodo['Periodo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desde'); ?></dt>
		<dd>
			<?php echo h($periodo['Periodo']['desde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hasta'); ?></dt>
		<dd>
			<?php echo h($periodo['Periodo']['hasta']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Periodo'), array('action' => 'edit', $periodo['Periodo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Periodo'), array('action' => 'delete', $periodo['Periodo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $periodo['Periodo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('controller' => 'tarjetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inscripcions'); ?></h3>
	<?php if (!empty($periodo['Inscripcion'])): ?>
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
	<?php foreach ($periodo['Inscripcion'] as $inscripcion): ?>
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
<div class="related">
	<h3><?php echo __('Related Tarjetas'); ?></h3>
	<?php if (!empty($periodo['Tarjeta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Alumno Id'); ?></th>
		<th><?php echo __('Periodo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($periodo['Tarjeta'] as $tarjeta): ?>
		<tr>
			<td><?php echo $tarjeta['id']; ?></td>
			<td><?php echo $tarjeta['codigo']; ?></td>
			<td><?php echo $tarjeta['alumno_id']; ?></td>
			<td><?php echo $tarjeta['periodo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tarjetas', 'action' => 'view', $tarjeta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tarjetas', 'action' => 'edit', $tarjeta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tarjetas', 'action' => 'delete', $tarjeta['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tarjeta['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
