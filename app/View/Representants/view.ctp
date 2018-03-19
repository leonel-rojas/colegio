<div class="representants view">
<h2><?php echo __('Representant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($representant['Representant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($representant['Persona']['id'], array('controller' => 'personas', 'action' => 'view', $representant['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($representant['Profesion']['id'], array('controller' => 'profesions', 'action' => 'view', $representant['Profesion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Representant'), array('action' => 'edit', $representant['Representant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Representant'), array('action' => 'delete', $representant['Representant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $representant['Representant']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Representants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesions'), array('controller' => 'profesions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesion'), array('controller' => 'profesions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alumnos'); ?></h3>
	<?php if (!empty($representant['Alumno'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Representant Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($representant['Alumno'] as $alumno): ?>
		<tr>
			<td><?php echo $alumno['id']; ?></td>
			<td><?php echo $alumno['persona_id']; ?></td>
			<td><?php echo $alumno['representant_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'alumnos', 'action' => 'view', $alumno['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'alumnos', 'action' => 'edit', $alumno['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'alumnos', 'action' => 'delete', $alumno['id']), array('confirm' => __('Are you sure you want to delete # %s?', $alumno['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
