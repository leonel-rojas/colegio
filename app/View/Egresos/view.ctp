<div class="egresos view">
<h2><?php echo __('Egreso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($egreso['Egreso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($egreso['Egreso']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipoegreso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($egreso['Tipoegreso']['nombre'], array('controller' => 'tipoegresos', 'action' => 'view', $egreso['Tipoegreso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($egreso['Egreso']['monto']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Egreso'), array('action' => 'edit', $egreso['Egreso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Egreso'), array('action' => 'delete', $egreso['Egreso']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $egreso['Egreso']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Egreso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipoegresos'), array('controller' => 'tipoegresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipoegreso'), array('controller' => 'tipoegresos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Trabajadors'); ?></h3>
	<?php if (!empty($egreso['Trabajador'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($egreso['Trabajador'] as $trabajador): ?>
		<tr>
			<td><?php echo $trabajador['id']; ?></td>
			<td><?php echo $trabajador['persona_id']; ?></td>
			<td><?php echo $trabajador['cargo_id']; ?></td>
			<td><?php echo $trabajador['profesion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trabajadors', 'action' => 'view', $trabajador['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trabajadors', 'action' => 'edit', $trabajador['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trabajadors', 'action' => 'delete', $trabajador['id']), array('confirm' => __('Are you sure you want to delete # %s?', $trabajador['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
