<?php #debug($ingresos); ?>
<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="#" onclick="window.open('/colegio/ingresos/reporteGeneralAranceles')"><button class="btn btn-danger btn-quirk">PDF General<i class="fa fa-file-pdf-o"></i></button></a>
			<?php /*
			<a href="/colegio/ingresos/indicarFecha"><button class="btn btn-info btn-quirk">Rango de fechas<i class="fa fa-calendar"></i></button></a>
			<a href="#" onclick="window.open('/colegio/ingresos/reporteDocentes')"><button class="btn btn-danger btn-quirk">PDF Docentes<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/ingresos/reporteAdministrativos')"><button class="btn btn-danger btn-quirk">PDF Personal Administrativo<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/ingresos/reporteObreros')"><button class="btn btn-danger btn-quirk">PDF Obreros<i class="fa fa-file-pdf-o"></i></button></a>

			*/ ?>
		</div>
		<h4 class="panel-title">INGRESOS POR ARANCELES</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>fecha</th>
						<th>periodo</th>
						<th>tipo</th>
						<th>detalle</th>
						<th>alumno</th>
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
						<?php echo $ingreso['Ingreso']['detalle']; ?>
					</td>
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
