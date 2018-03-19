<div class="trabajadorsEgresos index">
	<h2><?php echo __('Trabajadors Egresos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('trabajador_id'); ?></th>
			<th><?php echo $this->Paginator->sort('egreso_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($trabajadorsEgresos as $trabajadorsEgreso): ?>
	<tr>
		<td><?php echo h($trabajadorsEgreso['TrabajadorsEgreso']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trabajadorsEgreso['Trabajador']['id'], array('controller' => 'trabajadors', 'action' => 'view', $trabajadorsEgreso['Trabajador']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trabajadorsEgreso['Egreso']['id'], array('controller' => 'egresos', 'action' => 'view', $trabajadorsEgreso['Egreso']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $trabajadorsEgreso['TrabajadorsEgreso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $trabajadorsEgreso['TrabajadorsEgreso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $trabajadorsEgreso['TrabajadorsEgreso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $trabajadorsEgreso['TrabajadorsEgreso']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Trabajadors Egreso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('controller' => 'egresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
