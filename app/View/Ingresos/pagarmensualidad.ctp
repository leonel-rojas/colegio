<div class="ingresos form">
<?php echo $this->Form->create('Ingreso'); ?>
	<fieldset>
		<legend><?php echo __('Pago de Mensualidad del mes de '.$mes); ?></legend>
	<?php
		echo $this->Form->input('fecha', array('type'=>'text', 'value'=>date('d-m-Y'), 'readonly', 'class'=>'form-control'));
		echo $this->Form->input('periodo_id', array('selected'=>$periodo_id, 'readonly'=>true, 'class'=>'form-control'));
		#echo $this->Form->input('tipo', array('options'=>array('M')));
		#echo $this->Form->input('alumno_id');
		echo $this->Form->input('monto', array('class'=>'form-control'));

		echo $this->Form->input('codigo_tarjeta', array('class'=>'form-control', 'value'=>$codigo_tarjeta, 'readonly'));


	?>
</fieldset><br><br>
<?php echo $this->Form->end(__('Pagar')); ?>
</div>
