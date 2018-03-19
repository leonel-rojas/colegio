<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>
<div class="panel-heading">
  <h4 class="panel-title">ALUMNOS MOROSOS DEL MES EN CURSO</h4>
</div>
<div class="panel">
	<div class="panel-body">
		<div class="table-responsive">
			<table id="dataTable1" class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>Alumno</th>
						<th>Representante</th>
						<th>Periodo Actual</th>
						<th>Tarjeta de Pago</th>
            <th>Condición Mes Actual</th>
					</tr>
				</thead>

				<tbody>
				<?php foreach ($alumnos as $alumno): ?>
				<tr>
					<td>
						<?php echo $alumno['Persona']['cedula'].' - '.$alumno['Persona']['nombre'].' '.$alumno['Persona']['apellido']; ?>
					</td>
					<td>
						<?php echo $alumno['Representant']['Persona']['cedula'].' - '.$alumno['Representant']['Persona']['nombre'].' '.$alumno['Representant']['Persona']['apellido']; ?>
					</td>
					<td>
						<?php foreach ($alumno['Inscripcion'] as $key => $value): ?>
							<?php #debug($key); ?>
						<?php endforeach; ?>
						<?php echo $alumno['Inscripcion'][$key]['Periodo']['nombre']; ?>
					</td>
          <td>
            <?php foreach ($alumno['Tarjeta'] as $key => $value): ?>
              <?php #debug($key); ?>
            <?php endforeach; ?>
            <span class="badge badge-success"> <?php echo $alumno['Tarjeta'][$key]['codigo']; ?></span>
          </td>
					<td>
            <?php if (date('m') == 09 && $value['Mesespago'][0]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 10 && $value['Mesespago'][1]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 11 && $value['Mesespago'][2]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 12 && $value['Mesespago'][3]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 01 && $value['Mesespago'][4]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 02 && $value['Mesespago'][5]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 03 && $value['Mesespago'][6]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 04 && $value['Mesespago'][7]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 05 && $value['Mesespago'][8]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 06 && $value['Mesespago'][9]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 07 && $value['Mesespago'][10]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php elseif (date('m') == 08 && $value['Mesespago'][11]['condicion'] == 'Pendiente'): ?>
              <span class="label label-danger">MOROSO</span>
            <?php endif; ?>
					</td>
				</tr>
				<?php endforeach; ?>
				</tbody>

			</table>
		</div>
	</div>
</div><!-- panel -->
