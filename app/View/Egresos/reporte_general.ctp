<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>

<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">PAGOS REALIZADOS AL PERSONAL</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>fecha</th>
						<th>tipoegreso</th>
						<th>trabajador</th>
						<th>cargo</th>
						<th>Profesión</th>
						<th>monto</th>
						<?php /*
						<th>Acciones</th>
						*/ ?>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($egresos as $egreso): ?>
				<tr>
					<td><?php echo h($egreso['Egreso']['fecha']); ?>&nbsp;</td>
					<td>
						<?php echo $egreso['Tipoegreso']['nombre']; ?>
					</td>
					<td>
						<?php echo $egreso['Trabajador'][0]['Persona']['cedula'].' - '.$egreso['Trabajador'][0]['Persona']['nombre'].' '.$egreso['Trabajador'][0]['Persona']['apellido']; ?>
					</td>
					<td>
						<?php echo $egreso['Trabajador'][0]['Cargo']['nombre']; ?>
					</td>
					<td>
						<?php echo $egreso['Trabajador'][0]['Profesion']['nombre']; ?>
					</td>
					<td><?php echo h($egreso['Egreso']['monto']); ?>&nbsp;</td>
					<?php /*
					<td>
						<a href="/colegio/egresos/view/<?php echo $egreso['Egreso']['id']; ?>">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-icon tooltips" type="button" data-original-title="Ver - Editar"><i class="fa fa-edit"></i></button>
						</a>
					</td>
					*/ ?>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
