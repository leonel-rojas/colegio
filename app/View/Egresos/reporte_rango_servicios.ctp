<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>

<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">PAGOS DE SERVICIOS REALIZADOS
			<text class="text-success">Desde </text>
			<text class="text-danger"><?php echo $desde ?></text>
			<text class="text-success"> Hasta </text>
			<text class="text-danger"><?php echo $hasta ?></text>
			<text class="text-success"> FILTRO </text>
			<text class="text-danger"><?php echo $detalle ?></text>
		</h4>
	</div>
	<div class="panel-body">

		<?php if (!empty($egresos)): ?>

			<div class="table-responsive">
				<table class="table table-bordered table-striped-col">
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
						<td><?php echo h($egreso['Egreso']['detalle']); ?>&nbsp;</td>
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

			<table class="table table-bordered table-striped-col">
				<thead>
					<tr class="pull-right">
						<th>Total</th>
						<?php foreach ($total as $suma): ?>
						<th><?php echo $suma[0]['total']; ?></th>
						<?php endforeach; ?>
					</tr>
				</thead>


			</table>

		<?php else: ?>
			<div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Indique un rango de fechas </strong> para obtener reporte
      </div>
		<?php endif; ?>
		</div>
	</div>
</div><!-- panel -->
