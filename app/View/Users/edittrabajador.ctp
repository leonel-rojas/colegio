<?php #debug($user) ?>

<div class="row">
	<div class="col-sm-12 people-list">

		<?php if ($autentificado['Rol']['id'] == 1): ?>

		<div class="people-options clearfix">
			<div class="btn-toolbar pull-left">
				<a href="/colegio/personas/addtrabajador"><button type="button" class="btn btn-success btn-quirk">Nuevo Usuario</button></a>
			</div>
			<label for="" class="pull-right" style="font-size:25px;color:#fff;"><?php echo $user[0]['Persona']['nombre'].' '.$user[0]['Persona']['apellido'] ?></label>
		</div><!-- people-options -->

	<?php endif; ?>

		<div class="panel panel-profile list-view">
			<div class="panel-heading">
				<div class="media">
					<div class="media-left">
						<a href="#">
							<?php echo $this->Html->image('/images/datospersonales.png', array('class'=>'media-object img-circle')); ?>
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Datos personales</h4>
					</div>
				</div><!-- media -->
				<ul class="panel-options">
					<li><a class="tooltips" href="" data-toggle="tooltip" title="Editar Datos Personales"><i class="glyphicon glyphicon-option-vertical"></i></a></li>
				</ul>
			</div><!-- panel-heading -->

			<div class="panel-body people-info">
				<div class="row">
					<div class="col-sm-4">
						<div class="info-group">
							<label>Nombre</label>
							<?php echo $user[0]['Persona']['nombre'].' '.$user[0]['Persona']['apellido'] ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="info-group">
							<label>Email</label>
							<?php echo $user[0]['User']['username'] ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="info-group">
							<label>Cédula</label>
							<?php echo $user[0]['Persona']['cedula'] ?>
						</div>
					</div>
				</div><!-- row -->
				<div class="row">
					<div class="col-sm-4">
						<div class="info-group">
							<label>Nacimiento - Edad</label>
							<?php echo $user[0]['Persona']['nacimiento'] ?>
							 /
							 <?php
 								$nacimiento = $user[0]['Persona']['nacimiento'];
 								$fecha_actual = date('Y-m-d');
 							 ?>
 							(<?php echo $fecha_actual - $nacimiento; ?>)
						</div>
					</div>
					<div class="col-sm-4">
						<div class="info-group">
							<label>Celular</label>
							<?php echo $user[0]['Persona']['celular']; ?>

						</div>
					</div>
					<div class="col-sm-4">
						<div class="info-group">
							<label>Dirección</label>
							<?php echo $user[0]['Persona']['direccion'] ?>
						</div>
					</div>
				</div><!-- row -->
			</div>
		</div><!-- panel -->
		<div class="panel panel-profile list-view">
			<div class="panel-heading">
				<div class="media">
					<div class="media-left">
						<a href="#">
							<?php echo $this->Html->image('/images/datoslaborales.png', array('class'=>'media-object img-circle')); ?>
						</a>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Datos de acceso</h4>

					</div>
				</div><!-- media -->
			</div>
			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('id'); ?>
			<?php #echo $this->Form->input('password'); ?>
			<div class="panel-body people-info">
				<div class="row">
					<div class="col-sm-4">
						<div class="info-group">
							<label>Nombre</label>
							<?php echo $this->Form->input('username', array('class'=>'form-control', 'label'=>false)); ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="info-group">
							<label>Role</label>
							<?php echo $this->Form->input('rol_id', array('class'=>'form-control', 'label'=>false)); ?>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="info-group">
							<label>Status</label>
							<select class="form-control" name="data[User][status]" required>
								<?php if ($user[0]['User']['status']==='A'): ?>
									<option selected value="A"> Activo </option>
									<option value="I"> Inactivo </option>
								<?php else: ?>
									<option value="A"> Activo </option>
									<option selected value="I"> Inactivo </option>
								<?php endif; ?>
							</select>
						</div>
					</div>
				</div><!-- row -->
				<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
								<button class="btn btn-success" type="submit">Actualizar datos de acceso</button>
						</div>
				</div>
			</div>
		</div><!-- panel -->


	</div>


</div><!-- row -->







<?php /*
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('rol_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('controller' => 'bitacoras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('controller' => 'bitacoras', 'action' => 'add')); ?> </li>
	</ul>
</div>

*/ ?>
