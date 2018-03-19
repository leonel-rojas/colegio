<div class="bancos form">
<?php echo $this->Form->create('Banco'); ?>
	<fieldset>
		<legend><?php echo __('Add Banco'); ?></legend>
	<?php
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bancos'), array('action' => 'index')); ?></li>
	</ul>
</div>
