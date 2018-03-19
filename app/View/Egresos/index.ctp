<?php #debug($egresos); ?>
<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="/colegio/egresos/indicarFecha"><button class="btn btn-info btn-quirk">Rango de fechas<i class="fa fa-calendar"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneral')"><button class="btn btn-danger btn-quirk">PDF General<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteDocentes')"><button class="btn btn-danger btn-quirk">PDF Docentes<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteAdministrativos')"><button class="btn btn-danger btn-quirk">PDF Personal Administrativo<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteObreros')"><button class="btn btn-danger btn-quirk">PDF Obreros<i class="fa fa-file-pdf-o"></i></button></a>

		</div>
		<h4 class="panel-title">EGRESOS</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>fecha</th>
						<th>tipo de egreso</th>
						<th>detalle</th>
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
						<?php if ($egreso['Tipoegreso']['id'] == 1): ?>
						----------------
						<?php else: ?>
						<?php echo $egreso['Egreso']['detalle']; ?>
						<?php endif; ?>
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
