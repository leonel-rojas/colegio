<div class="mesespagos view">
<h2><?php echo __('Mesespago'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mesespago['Mesespago']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tarjeta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mesespago['Tarjeta']['id'], array('controller' => 'tarjetas', 'action' => 'view', $mesespago['Tarjeta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingreso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mesespago['Ingreso']['id'], array('controller' => 'ingresos', 'action' => 'view', $mesespago['Ingreso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Condicion'); ?></dt>
		<dd>
			<?php echo h($mesespago['Mesespago']['condicion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mesespago'), array('action' => 'edit', $mesespago['Mesespago']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mesespago'), array('action' => 'delete', $mesespago['Mesespago']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mesespago['Mesespago']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesespagos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesespago'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tarjetas'), array('controller' => 'tarjetas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarjeta'), array('controller' => 'tarjetas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingresos'), array('controller' => 'ingresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingreso'), array('controller' => 'ingresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
