<div class="bancos view">
<h2><?php echo __('Banco'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($banco['Banco']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($banco['Banco']['total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Banco'), array('action' => 'edit', $banco['Banco']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Banco'), array('action' => 'delete', $banco['Banco']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $banco['Banco']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('action' => 'add')); ?> </li>
	</ul>
</div>
