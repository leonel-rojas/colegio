<?php #debug($ingresos); ?>
<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="/colegio/ingresos/indicarFecha"><button class="btn btn-info btn-quirk">Volver <i class="fa fa-mail-reply"></i></button></a>
			<a href="#" onclick="window.open('/colegio/ingresos/reporteRango/<?php echo $rango ?>')"><button class="btn btn-danger btn-quirk">Imprimir<i class="fa fa-file-pdf-o"></i></button></a>

		</div>
		<h4 class="panel-title">INGRESOS OBTENIDOS
			<text class="text-success">Desde </text>
			<text class="text-danger"><?php echo $desde ?></text>
			<text class="text-success"> Hasta </text>
			<text class="text-danger"><?php echo $hasta ?></text>
		</h4>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>fecha</th>
						<th>periodo</th>
						<th>tipo</th>
						<th>alumno_id</th>
						<th>monto</th>
						<?php /*
						<th>Acciones</th>
						*/ ?>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($ingresos as $ingreso): ?>

				<tr>
					<td><?php echo $ingreso['Ingreso']['fecha']; ?>&nbsp;</td>
					<td>
						<?php echo $ingreso['Periodo']['nombre']; ?>
					</td>
					<td><?php echo $ingreso['Ingreso']['tipo']; ?>&nbsp;</td>
					<td>
						<?php echo $ingreso['Alumno']['Persona']['cedula'].' - '.$ingreso['Alumno']['Persona']['nombre'].' '.$ingreso['Alumno']['Persona']['apellido']; ?>
					</td>
					<td><?php echo $ingreso['Ingreso']['monto']; ?>&nbsp;</td>
					<?php /*
					<td>
						<a href="/colegio/ingresos/view/<?php echo $egreso['Egreso']['id']; ?>">
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
