<?php #debug($ingresos); ?>
<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="#" onclick="window.open('/colegio/representants/reporteGeneral')"><button class="btn btn-danger btn-quirk">PDF General<i class="fa fa-file-pdf-o"></i></button></a>
			<?php /*
			<a href="#" onclick="window.open('/colegio/ingresos/reporteDocentes')"><button class="btn btn-danger btn-quirk">PDF Docentes<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/ingresos/reporteAdministrativos')"><button class="btn btn-danger btn-quirk">PDF Personal Administrativo<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/ingresos/reporteObreros')"><button class="btn btn-danger btn-quirk">PDF Obreros<i class="fa fa-file-pdf-o"></i></button></a>

			*/ ?>
		</div>
		<h4 class="panel-title">REPRESENTANTES</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>nombre y apellido</th>
						<th>profesion</th>
						<th>representante de</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($representants as $representant): ?>
					<tr>
						<td>
							<?php echo $representant['Persona']['cedula'].' - '.$representant['Persona']['nombre'].' '.$representant['Persona']['apellido']; ?>
						</td>
						<td>
							<?php echo $representant['Profesion']['nombre']; ?>
						</td>
						<td>
							<?php foreach ($representant['Alumno'] as $key => $value): ?>

									<?php echo $value['Persona']['cedula'].' - '.$value['Persona']['nombre'].' '.$value['Persona']['apellido']; ?><br>

							<?php endforeach; ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
