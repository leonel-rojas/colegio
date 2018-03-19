<div class="trabajadors view">
<h2><?php echo __('Trabajador'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($trabajador['Trabajador']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trabajador['Persona']['cedula'], array('controller' => 'personas', 'action' => 'view', $trabajador['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trabajador['Cargo']['nombre'], array('controller' => 'cargos', 'action' => 'view', $trabajador['Cargo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($trabajador['Profesion']['nombre'], array('controller' => 'profesions', 'action' => 'view', $trabajador['Profesion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Trabajador'), array('action' => 'edit', $trabajador['Trabajador']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Trabajador'), array('action' => 'delete', $trabajador['Trabajador']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $trabajador['Trabajador']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesions'), array('controller' => 'profesions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesion'), array('controller' => 'profesions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Egresos'), array('controller' => 'egresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Egresos'); ?></h3>
	<?php if (!empty($trabajador['Egreso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th><?php echo __('Tipoegreso Id'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trabajador['Egreso'] as $egreso): ?>
		<tr>
			<td><?php echo $egreso['id']; ?></td>
			<td><?php echo $egreso['fecha']; ?></td>
			<td><?php echo $egreso['tipoegreso_id']; ?></td>
			<td><?php echo $egreso['monto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'egresos', 'action' => 'view', $egreso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'egresos', 'action' => 'edit', $egreso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'egresos', 'action' => 'delete', $egreso['id']), array('confirm' => __('Are you sure you want to delete # %s?', $egreso['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Egreso'), array('controller' => 'egresos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
