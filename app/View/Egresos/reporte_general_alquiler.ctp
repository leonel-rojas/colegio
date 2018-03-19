<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>

<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">PAGOS DE SERVICIOS REALIZADOS</h4>
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
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
