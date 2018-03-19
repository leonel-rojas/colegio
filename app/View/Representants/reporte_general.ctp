<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>

<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title text-center">REPRESENTANTES</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped-col">
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
