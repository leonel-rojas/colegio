<div class="ingresos form">
<?php echo $this->Form->create('Egreso'); ?>
	<fieldset>
		<legend><?php echo __('Pago de Personal'); ?> <br> SALDO DISPONIBLE EN LA CUENTA VITUAL: <span class="badge"><text style="font-size: 20px;"><i class="fa fa-money"></i> <?php echo $total; ?> </text></span></legend>
	<?php
		echo $this->Form->input('fecha', array('type'=>'text', 'value'=>date('Y-m-d'), 'readonly', 'class'=>'form-control',));
		echo $this->Form->input('tipoegreso_id', array('selected'=>1, 'readonly'=>true, 'class'=>'form-control'));
		echo $this->Form->input('monto', array('class'=>'form-control'));
		echo $this->Form->input('Trabajador', array('value'=>$trabajador, 'type'=>'hidden'));
		#echo $this->Form->input('Trabajador');
	?>
	</fieldset><br><br>
<?php echo $this->Form->end(__('Realizar Pago')); ?>
</div>
