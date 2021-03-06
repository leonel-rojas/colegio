<?php
	#debug($egresos);
	#exit;
?>
<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">INGRESOS</h4>
	</div>
	<div class="panel-body">

		<?php echo $this->Form->create('Egreso', array('class'=>'form-horizontal', 'id'=>'basicForm', 'name'=>'varias')); ?>
		<!-- <form id="basicForm" class="form-horizontal"> -->
			<div class="form-group">
				<div class="col-sm-2 col-sm-offset-2">
					<?php echo $this->Form->date('desde', array('label'=>false, 'class'=>'form-control', 'placeholder'=>'Desde')); ?>
				</div>
				<div class="col-sm-2">
					<?php echo $this->Form->date('hasta', array('label'=>false, 'class'=>'form-control', 'placeholder'=>'Hasta')); ?>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-success btn-quirk btn-wide mr5">Buscar</button>
				</div>
			</div>
			<br>

		</form>
		<?php echo $this->Form->end(); ?>

		<?php if (!empty($egresos)): ?>

		<div class="table-responsive">
			<table class="table table-bordered table-striped-col">
				<thead>
					<tr>
						<th>fecha</th>
						<th>tipoegreso</th>
						<th>trabajador</th>
						<th>cargo</th>
						<th>Profesión</th>
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
						<?php echo $egreso['Trabajador'][0]['Persona']['cedula'].' - '.$egreso['Trabajador'][0]['Persona']['nombre'].' '.$egreso['Trabajador'][0]['Persona']['apellido']; ?>
					</td>
					<td>
						<?php echo $egreso['Trabajador'][0]['Cargo']['nombre']; ?>
					</td>
					<td>
						<?php echo $egreso['Trabajador'][0]['Profesion']['nombre']; ?>
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
