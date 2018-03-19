<div class="bitacoras view">
<h2><?php echo __('Bitacora'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bitacora['User']['id'], array('controller' => 'users', 'action' => 'view', $bitacora['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modulo'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['modulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accion'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['accion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bitacora'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bitacora'), array('action' => 'delete', $bitacora['Bitacora']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
