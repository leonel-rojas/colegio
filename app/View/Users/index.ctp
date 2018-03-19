

<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="/colegio/personas/addtrabajador"><button class="btn btn-primary btn-quirk">Nuevo <i class="fa fa-plus"></i></button></a>
			<a href="#" onclick="window.open('/colegio/users/reporteGeneral')"><button class="btn btn-danger btn-quirk">PDF General<i class="fa fa-file-pdf-o"></i></button></a>

		</div>
		<h4 class="panel-title">USUARIOS REGISTRADOS</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>Nombre y Apellido</th>
						<th>Cedula</th>
						<th>Username</th>
						<th>Role</th>
						<th>Status</th>
						<th>Acciones</th>
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
					<td>
						<a href="/colegio/users/edittrabajador/<?php echo $user['User']['id']; ?>">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-icon tooltips" type="button" data-original-title="Ver - Editar"><i class="fa fa-edit"></i></button>
						</a>
						<a href="/colegio/users/delete/<?php echo $user['User']['id'] ?>"
							onclick="return confirm(
							'¿Realmente desea eliminar usuario?'
							);">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-danger btn-icon tooltips" type="button" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
						</a>
						<?php #echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete',$user['User']['id']), array('confirm' => __('¿Realmente desea eliminar usuario?', $user['User']['id']))); ?>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
