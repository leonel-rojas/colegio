<div class="periodos index">
	<h2><?php echo __('Periodos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('desde'); ?></th>
			<th><?php echo $this->Paginator->sort('hasta'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($periodos as $periodo): ?>
	<tr>
		<td><?php echo h($periodo['Periodo']['id']); ?>&nbsp;</td>
		<td><?php echo h($periodo['Periodo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($periodo['Periodo']['desde']); ?>&nbsp;</td>
		<td><?php echo h($periodo['Periodo']['hasta']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $periodo['Periodo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $periodo['Periodo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $periodo['Periodo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $periodo['Periodo']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Periodo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscripcions'), array('controller' => 'inscripcions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripcions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('controller' => 'tarjetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
	</ul>
</div>
