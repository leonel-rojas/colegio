<div class="ingresos view">
<h2><?php echo __('Ingreso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ingreso['Ingreso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($ingreso['Ingreso']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ingreso['Periodo']['id'], array('controller' => 'periodos', 'action' => 'view', $ingreso['Periodo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($ingreso['Ingreso']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ingreso['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $ingreso['Alumno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($ingreso['Ingreso']['monto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingreso'), array('action' => 'edit', $ingreso['Ingreso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ingreso'), array('action' => 'delete', $ingreso['Ingreso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ingreso['Ingreso']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingresos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingreso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesespagos'), array('controller' => 'mesespagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesespago'), array('controller' => 'mesespagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mesespagos'); ?></h3>
	<?php if (!empty($ingreso['Mesespago'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tarjeta Id'); ?></th>
		<th><?php echo __('Ingreso Id'); ?></th>
		<th><?php echo __('Condicion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ingreso['Mesespago'] as $mesespago): ?>
		<tr>
			<td><?php echo $mesespago['id']; ?></td>
			<td><?php echo $mesespago['tarjeta_id']; ?></td>
			<td><?php echo $mesespago['ingreso_id']; ?></td>
			<td><?php echo $mesespago['condicion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mesespagos', 'action' => 'view', $mesespago['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mesespagos', 'action' => 'edit', $mesespago['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mesespagos', 'action' => 'delete', $mesespago['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mesespago['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mesespago'), array('controller' => 'mesespagos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
