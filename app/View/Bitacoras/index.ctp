

<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="#" onclick="window.open('/colegio/bitacoras/reporteGeneral')"><button class="btn btn-danger btn-quirk">PDF General<i class="fa fa-file-pdf-o"></i></button></a>

		</div>
		<h4 class="panel-title">BITACORA</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>usuario</th>
						<th>modulo</th>
						<th>accion</th>
						<th>fecha y hora</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($bitacoras as $bitacora): ?>
				<tr>
					<td>
						<?php echo $bitacora['User']['Persona']['cedula'].' - '.$bitacora['User']['Persona']['nombre'].' '.$bitacora['User']['Persona']['apellido']; ?>
					</td>
					<td><?php echo h($bitacora['Bitacora']['modulo']); ?>&nbsp;</td>
					<td><?php echo h($bitacora['Bitacora']['accion']); ?>&nbsp;</td>
					<td><?php echo h($bitacora['Bitacora']['created']); ?>&nbsp;</td>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->

<?php /*

<div class="bitacoras index">
	<h2><?php echo __('Bitacoras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modulo'); ?></th>
			<th><?php echo $this->Paginator->sort('accion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bitacoras as $bitacora): ?>
	<tr>
		<td><?php echo h($bitacora['Bitacora']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bitacora['User']['id'], array('controller' => 'users', 'action' => 'view', $bitacora['User']['id'])); ?>
		</td>
		<td><?php echo h($bitacora['Bitacora']['modulo']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['accion']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bitacora['Bitacora']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bitacora['Bitacora']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
*/ ?>
