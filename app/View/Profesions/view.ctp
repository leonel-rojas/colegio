<div class="profesions view">
<h2><?php echo __('Profesion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profesion['Profesion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($profesion['Profesion']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profesion'), array('action' => 'edit', $profesion['Profesion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profesion'), array('action' => 'delete', $profesion['Profesion']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $profesion['Profesion']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docents'), array('controller' => 'docents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docent'), array('controller' => 'docents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representants'), array('controller' => 'representants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representant'), array('controller' => 'representants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docents'); ?></h3>
	<?php if (!empty($profesion['Docent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Especialidad Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profesion['Docent'] as $docent): ?>
		<tr>
			<td><?php echo $docent['id']; ?></td>
			<td><?php echo $docent['persona_id']; ?></td>
			<td><?php echo $docent['especialidad_id']; ?></td>
			<td><?php echo $docent['profesion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docents', 'action' => 'view', $docent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docents', 'action' => 'edit', $docent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docents', 'action' => 'delete', $docent['id']), array('confirm' => __('Are you sure you want to delete # %s?', $docent['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docent'), array('controller' => 'docents', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Representants'); ?></h3>
	<?php if (!empty($profesion['Representant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profesion['Representant'] as $representant): ?>
		<tr>
			<td><?php echo $representant['id']; ?></td>
			<td><?php echo $representant['persona_id']; ?></td>
			<td><?php echo $representant['profesion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'representants', 'action' => 'view', $representant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'representants', 'action' => 'edit', $representant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'representants', 'action' => 'delete', $representant['id']), array('confirm' => __('Are you sure you want to delete # %s?', $representant['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Representant'), array('controller' => 'representants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Trabajadors'); ?></h3>
	<?php if (!empty($profesion['Trabajador'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($profesion['Trabajador'] as $trabajador): ?>
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
