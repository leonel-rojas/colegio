<?php
	#debug($alumnos);
	#exit;
 ?>
<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="/colegio/alumnos/add"><button class="btn btn-primary btn-quirk">Nuevo <i class="fa fa-plus"></i></button></a>
			<a href="#" onclick="window.open('/colegio/alumnos/reporteGeneral')"><button class="btn btn-danger btn-quirk">PDF General<i class="fa fa-file-pdf-o"></i></button></a>

		</div>
		<h4 class="panel-title">ALUMNOS REGISTRADOS</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>Alumno</th>
						<th>Representante</th>
						<th>Periodo Actual</th>
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
						<?php echo $alumno['Representant']['Persona']['cedula'].' - '.$alumno['Representant']['Persona']['nombre'].' '.$alumno['Representant']['Persona']['apellido']; ?>
					</td>
					<td>
						<?php foreach ($alumno['Inscripcion'] as $key => $value): ?>
							<?php #debug($key); ?>
						<?php endforeach; ?>
						<?php echo $alumno['Inscripcion'][$key]['Periodo']['nombre']; ?>
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
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-info btn-icon tooltips" type="button" data-original-title="Tarjeta de Pago"><i class="fa fa-file-pdf-o"></i></button>
						</a>

						<?php foreach ($alumno['Inscripcion'] as $key => $value): ?>
							<?php #debug($key); ?>
						<?php endforeach; ?>
						<?php $fin_periodo = $alumno['Inscripcion'][$key]['Periodo']['hasta']; ?>
						<?php $hoy = date('Y-m-d'); ?>
						<?php if ($fin_periodo <= $hoy): ?>
							<a href="/colegio/inscripcions/nuevoperiodo/<?php echo $alumno['Alumno']['id']; ?>">
								<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-warning btn-icon tooltips" type="button" data-original-title="Inscripción en NUEVO PERÍODO ACADÉMICO"><i class="fa fa-plus"></i></button>
							</a>
						<?php else: ?>
							<a href="#">
								<button title="" disabled="true" data-placement="top" data-toggle="tooltip" class="btn btn-warning btn-icon tooltips" type="button" data-original-title="Inscripción en NUEVO PERÍODO ACADÉMICO"><i class="fa fa-plus"></i></button>
							</a>
						<?php endif; ?>

						<a href="/colegio/alumnos/delete/<?php echo $alumno['Alumno']['id'] ?>"
							onclick="return confirm(
							'¿Realmente desea eliminar alumno?'
							);">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-danger btn-icon tooltips" type="button" data-original-title="Eliminar"><i class="fa fa-times"></i></button>
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
