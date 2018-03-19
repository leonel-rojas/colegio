<?php #debug($trabajadors); ?>
<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="/colegio/personas/addpersonal"><button class="btn btn-primary btn-quirk">Nuevo <i class="fa fa-plus"></i></button></a>
			<a href="#" onclick="window.open('/colegio/trabajadors/reporteGeneral')"><button class="btn btn-danger btn-quirk">PDF General<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/trabajadors/reporteDocentes')"><button class="btn btn-danger btn-quirk">PDF Docentes<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/trabajadors/reporteAdministrativos')"><button class="btn btn-danger btn-quirk">PDF Personal Admin<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/trabajadors/reporteObreros')"><button class="btn btn-danger btn-quirk">PDF Obreros<i class="fa fa-file-pdf-o"></i></button></a>

		</div>
		<h4 class="panel-title">PERSONAL REGISTRADO</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>cedula</th>
						<th>nombre</th>
						<th>cargo</th>
						<th>profesión</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
					<?php foreach ($trabajadors as $trabajador): ?>
					<tr>
						<td>
							<?php echo $trabajador['Persona']['cedula']; ?>
						</td>
						<td>
							<?php echo $trabajador['Persona']['nombre'].' '.$trabajador['Persona']['apellido']; ?>
						</td>
						<td>
							<?php echo $trabajador['Cargo']['nombre']; ?>
						</td>
						<td>
							<?php echo $trabajador['Profesion']['nombre']; ?>
						</td>
					<td>
						<a href="/colegio/personas/editpersonal/<?php echo $trabajador['Persona']['id']; ?>">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-icon tooltips" type="button" data-original-title="Ver - Editar"><i class="fa fa-edit"></i></button>
						</a>
						<a href="/colegio/egresos/pagarpersonal/<?php echo $trabajador['Trabajador']['id']; ?>">
							<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-danger btn-icon tooltips" type="button" data-original-title="Realizar Pago"><i class="fa fa-credit-card"></i></button>
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
