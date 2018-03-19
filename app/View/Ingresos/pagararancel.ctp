<div class="ingresos form">
<?php echo $this->Form->create('Ingreso', array('class'=>'form-horizontal', 'id'=>'basicForm')); ?>
	<fieldset>
		<legend><?php echo __('Pagos de Aranceles'); ?></legend>
	<?php
		echo $this->Form->input('fecha', array('type'=>'text', 'value'=>date('Y-m-d'), 'readonly', 'class'=>'form-control'));
		echo $this->Form->input('persona_id', array('class'=>'form-control', 'label'=>'Alumno', 'empty'=>'-- Seleccione Alumno --', 'required'));
		echo $this->Form->input('periodo_id', array('class'=>'form-control', 'required'));
		echo $this->Form->input('tipo', array('options'=>array('Aranceles' => 'Pago de Aranceles'), 'class'=>'form-control', 'required'));
		echo $this->Form->input('detalle',
		array(
					'options'=>
						array(
							'Constancia de Retiro' => 'Constancia de Retiro',
							'Constancia de Estudio' => 'Constancia de Estudio',
							'Constancia de Culminación' => 'Constancia de Culminación',
							'Teléfono' => 'Teléfono',
							'Alquiler' => 'Alquiler',
							'Catastro' => 'Catastro',
							'Gastos de Mantenimiento' => 'Gastos de Mantenimiento',
							'Publicidad' => 'Publicidad',
							'Gastos varios' => 'Gastos varios',
							'Donaciones' => 'Donaciones',
						),
					'class'=>'form-control',
					'required',
					'empty'=>'-- Seleccione Detalle --'
				)
		);
		echo $this->Form->input('monto', array('class'=>'form-control'));
	?>
	</fieldset>
	<br><br>
<?php echo $this->Form->end(__('Pagar Arancel')); ?>
</div>
