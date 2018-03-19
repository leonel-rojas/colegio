<?php #debug($alumnos); ?>
<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">TARJETAS DE PAGO</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>Alumno</th>
						<th>Tarjeta de Pago</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($alumnos as $alumno): ?>
				<tr>
					<td>
						<?php echo $alumno['Persona']['cedula'].' - '.$alumno['Persona']['nombre'].' '.$alumno['Persona']['apellido']; ?>
					</td>
					<td>
						<?php foreach ($alumno['Tarjeta'] as $key => $value): ?>
							<?php #debug($key); ?>
						<?php endforeach; ?>
						<a href="/colegio/tarjetas/view/<?php echo $alumno['Tarjeta'][$key]['id']; ?>"> <span class="badge badge-success"> <?php echo $alumno['Tarjeta'][$key]['codigo']; ?></span> </a>
					</td>
					<td>
						<a href="/colegio/alumnos/view/<?php echo $alumno['Alumno']['id']; ?>">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-icon tooltips" type="button" data-original-title="Ver - Editar"><i class="fa fa-edit"></i></button>
						</a>
						<a href="/colegio/tarjetas/view/<?php echo $alumno['Tarjeta'][$key]['id']; ?>">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-danger btn-icon tooltips" type="button" data-original-title="Tarjeta de Pago"><i class="fa fa-credit-card"></i></button>
						</a>
						<a href="#" onclick="window.open('/colegio/tarjetas/pdftarjeta/<?php echo $alumno['Tarjeta'][$key]['id']; ?>')">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-info btn-icon tooltips" type="button" data-original-title="Imprimir Tarjeta de Pago"><i class="fa fa-file-pdf-o"></i></button>
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
