<div class="trabajadorsEgresos view">
<h2><?php echo __('Trabajadors Egreso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($trabajadorsEgreso['TrabajadorsEgreso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trabajador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trabajadorsEgreso['Trabajador']['id'], array('controller' => 'trabajadors', 'action' => 'view', $trabajadorsEgreso['Trabajador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Egreso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trabajadorsEgreso['Egreso']['id'], array('controller' => 'egresos', 'action' => 'view', $trabajadorsEgreso['Egreso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trabajadors Egreso'), array('action' => 'edit', $trabajadorsEgreso['TrabajadorsEgreso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trabajadors Egreso'), array('action' => 'delete', $trabajadorsEgreso['TrabajadorsEgreso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $trabajadorsEgreso['TrabajadorsEgreso']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors Egresos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajadors Egreso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('controller' => 'egresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
