<div class="personas view">
<h2><?php echo __('Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacimiento'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto Dir'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['foto_dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Persona'), array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Persona'), array('action' => 'delete', $persona['Persona']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $persona['Persona']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docents'), array('controller' => 'docents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docent'), array('controller' => 'docents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representants'), array('controller' => 'representants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representant'), array('controller' => 'representants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trabajadors'), array('controller' => 'trabajadors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Trabajador'), array('controller' => 'trabajadors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Alumnos'); ?></h3>
	<?php if (!empty($persona['Alumno'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Representant Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Alumno'] as $alumno): ?>
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
<div class="related">
	<h3><?php echo __('Related Docents'); ?></h3>
	<?php if (!empty($persona['Docent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Especialidad Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Docent'] as $docent): ?>
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
	<?php if (!empty($persona['Representant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Representant'] as $representant): ?>
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
	<?php if (!empty($persona['Trabajador'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Profesion Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Trabajador'] as $trabajador): ?>
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
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($persona['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['persona_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['rol_id']; ?></td>
			<td><?php echo $user['status']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
