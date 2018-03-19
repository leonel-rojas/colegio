<div class="tipoegresos view">
<h2><?php echo __('Tipoegreso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoegreso['Tipoegreso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tipoegreso['Tipoegreso']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipoegreso'), array('action' => 'edit', $tipoegreso['Tipoegreso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipoegreso'), array('action' => 'delete', $tipoegreso['Tipoegreso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tipoegreso['Tipoegreso']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoegresos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoegreso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('controller' => 'egresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Egresos'); ?></h3>
	<?php if (!empty($tipoegreso['Egreso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Tipoegreso Id'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoegreso['Egreso'] as $egreso): ?>
		<tr>
			<td><?php echo $egreso['id']; ?></td>
			<td><?php echo $egreso['fecha']; ?></td>
			<td><?php echo $egreso['tipoegreso_id']; ?></td>
			<td><?php echo $egreso['monto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'egresos', 'action' => 'view', $egreso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'egresos', 'action' => 'edit', $egreso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'egresos', 'action' => 'delete', $egreso['id']), array('confirm' => __('Are you sure you want to delete # %s?', $egreso['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
