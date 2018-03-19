<?php
	#debug($egresos);
	#exit;
?>
<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">INGRESOS POR PAGOS DE ALUMNOS</h4>
	</div>
	<div class="panel-body">

		<?php echo $this->Form->create('Ingreso', array('class'=>'form-horizontal', 'id'=>'basicForm', 'name'=>'varias')); ?>
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
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong>Indique un rango de fechas </strong> para obtener reporte
		</div>
		<?php echo $this->Form->end(); ?>

	</div>
</div><!-- panel -->
