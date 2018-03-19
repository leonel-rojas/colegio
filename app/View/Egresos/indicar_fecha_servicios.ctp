<?php
	#debug($egresos);
	#exit;
?>
<div class="panel">
	<div class="panel-heading">
		<h4 class="panel-title">PAGOS DE SERVICIOS</h4>
	</div>
	<div class="panel-body">

		<?php echo $this->Form->create('Egreso', array('class'=>'form-horizontal', 'id'=>'basicForm', 'name'=>'varias')); ?>
		<!-- <form id="basicForm" class="form-horizontal"> -->
			<div class="form-group">
				<div class="col-sm-2 col-sm-offset-1">
					<?php echo $this->Form->date('desde', array('label'=>false, 'class'=>'form-control', 'placeholder'=>'Desde', 'required')); ?>
				</div>
				<div class="col-sm-2">
					<?php echo $this->Form->date('hasta', array('label'=>false, 'class'=>'form-control', 'placeholder'=>'Hasta', 'required')); ?>
				</div>
				<div class="col-sm-4">
					<?php
					echo $this->Form->input('detalle',
							array(
								'options'=>
								array(
									'TODOS' => 'TODOS',
									'Aseo' => 'Aseo',
									'Luz' => 'Luz',
									'Agua' => 'Agua',
									'Teléfono' => 'Teléfono',
									'Alquiler' => 'Alquiler',
									'Catastro' => 'Catastro',
									'Gastos de Mantenimiento' => 'Gastos de Mantenimiento',
									'Publicidad' => 'Publicidad',
									'Gastos varios' => 'Gastos varios',
									'Donaciones' => 'Donaciones',
								),
								'class'=>'form-control',
								'label'=>false,
								'required'
							)
						);
					 ?>
				</div>
				<div class="col-sm-2">
					<button class="btn btn-success btn-quirk btn-wide mr5">Buscar</button>
				</div>
			</div>
			<br>

		</form>
		<?php echo $this->Form->end(); ?>

			<div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Indique un rango de fechas </strong> para obtener reporte
      </div>

		</div>
	</div>
</div><!-- panel -->
