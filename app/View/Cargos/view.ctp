<div class="cargos view">
<h2><?php echo __('Cargo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cargo'), array('action' => 'edit', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cargo'), array('action' => 'delete', $cargo['Cargo']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cargo['Cargo']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Trabajadors'); ?></h3>
	<?php if (!empty($cargo['Trabajador'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cargo['Trabajador'] as $trabajador): ?>
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
