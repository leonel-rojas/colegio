<?php #debug($egresos); ?>
<div class="panel">
	<div class="panel-heading">
		<div class="text-right">
			<a href="/colegio/egresos/indicarFechaServicios"><button class="btn btn-info btn-quirk">Rango de fechas<i class="fa fa-calendar"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralServicios')"><button class="btn btn-danger btn-quirk">Todos<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralAseo')"><button class="btn btn-danger btn-quirk">Aseo<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralLuz')"><button class="btn btn-danger btn-quirk">Luz<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralAgua')"><button class="btn btn-danger btn-quirk">Agua<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralTelefono')"><button class="btn btn-danger btn-quirk">Telf<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralAlquiler')"><button class="btn btn-danger btn-quirk">Alquiler<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralCatastro')"><button class="btn btn-danger btn-quirk">Catas.<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralMantenimiento')"><button class="btn btn-danger btn-quirk">Mant.<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralPublicidad')"><button class="btn btn-danger btn-quirk">Publi.<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralVarios')"><button class="btn btn-danger btn-quirk">Varios<i class="fa fa-file-pdf-o"></i></button></a>
			<a href="#" onclick="window.open('/colegio/egresos/reporteGeneralDonaciones')"><button class="btn btn-danger btn-quirk">Donac.<i class="fa fa-file-pdf-o"></i></button></a>

		</div>
		<br>
		<h4 class="panel-title">PAGOS DE SERVICIOS REALIZADOS</h4>
		<p>Busque, ordene y visualice los datos de manera simple con el filtro inteligente</p>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>fecha</th>
						<th>tipoegreso</th>
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
						<?php echo $egreso['Egreso']['detalle']; ?>
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
