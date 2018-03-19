<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>

<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">ALUMNOS REGISTRADOS</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>Alumno</th>
						<th>Representante</th>
						<th>Periodo Actual</th>
						<th>Tarjeta de Pago</th>
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
						<?php echo $alumno['Tarjeta'][$key]['codigo']; ?>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
