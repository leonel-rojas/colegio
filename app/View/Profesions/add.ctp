<div class="profesions form">
<?php echo $this->Form->create('Profesion'); ?>
	<fieldset>
		<legend><?php echo __('Add Profesion'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Profesions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Docents'), array('controller' => 'docents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docent'), array('controller' => 'docents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representants'), array('controller' => 'representants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representant'), array('controller' => 'representants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
