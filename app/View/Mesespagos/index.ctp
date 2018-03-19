<?php
	#debug($mesespagos);
	#exit;
 ?>

<div class="mesespagos index">
	<h2><?php echo __('Mesespagos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tarjeta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ingreso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('condicion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mesespagos as $mesespago): ?>
	<tr>
		<td><?php echo h($mesespago['Mesespago']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mesespago['Tarjeta']['id'], array('controller' => 'tarjetas', 'action' => 'view', $mesespago['Tarjeta']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($mesespago['Ingreso']['id'], array('controller' => 'ingresos', 'action' => 'view', $mesespago['Ingreso']['id'])); ?>
		</td>
		<td><?php echo h($mesespago['Mesespago']['condicion']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mesespago['Mesespago']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mesespago['Mesespago']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mesespago['Mesespago']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mesespago['Mesespago']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Mesespago'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('controller' => 'tarjetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingresos'), array('controller' => 'ingresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingreso'), array('controller' => 'ingresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
