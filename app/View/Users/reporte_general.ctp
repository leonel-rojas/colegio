<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>

<div class="panel">
	<div class="panel-heading">
		<h4 class="text-center">USUARIOS REGISTRADOS</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>Nombre y Apellido</th>
						<th>Cedula</th>
						<th>Username</th>
						<th>Role</th>
						<th>Status</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($users as $user): ?>
				<tr>
					<td><?php echo $user['Persona']['nombre'].' '.$user['Persona']['apellido']; ?></td>
					<td><?php echo $user['Persona']['cedula'] ?></td>
					<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
					<td><?php echo h($user['Rol']['nombre']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
