<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>

<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">INGRESOS POR ARANCELES</h4>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped-col">
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
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
