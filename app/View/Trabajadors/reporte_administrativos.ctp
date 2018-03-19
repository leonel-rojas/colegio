<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>

<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title text-center">PERSONAL ADMINISTRATIVO REGISTRADO</h3>
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
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
