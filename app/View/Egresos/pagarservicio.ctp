<div class="ingresos form">
<?php echo $this->Form->create('Egreso'); ?>
	<fieldset>
		<legend><?php echo __('Pago de Servicio'); ?> <br> SALDO DISPONIBLE EN LA CUENTA VITUAL: <span class="badge"><text style="font-size: 20px;"><i class="fa fa-money"></i> <?php echo $total; ?> </text></span></legend>
	<?php
		echo $this->Form->input('fecha', array('type'=>'text', 'value'=>date('Y-m-d'), 'readonly', 'class'=>'form-control',));
		echo $this->Form->input('tipoegreso_id', array('selected'=>2, 'readonly'=>true, 'class'=>'form-control'));
		echo $this->Form->input('detalle',
		array(
					'options'=>
						array(
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
					'class'=>'form-control'
				)
		);
		echo $this->Form->input('monto', array('class'=>'form-control'));
	?>
	</fieldset><br><br>
<?php echo $this->Form->end(__('Realizar Pago')); ?>
</div>
