<div class="profesions index">
	<h2><?php echo __('Profesions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($profesions as $profesion): ?>
	<tr>
		<td><?php echo h($profesion['Profesion']['id']); ?>&nbsp;</td>
		<td><?php echo h($profesion['Profesion']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $profesion['Profesion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profesion['Profesion']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profesion['Profesion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $profesion['Profesion']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Profesion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Docents'), array('controller' => 'docents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docent'), array('controller' => 'docents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representants'), array('controller' => 'representants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representant'), array('controller' => 'representants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
