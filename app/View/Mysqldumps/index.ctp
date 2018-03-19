<div class="col-md-8 col-md-push-2 col-lg-6 col-lg-push-3">
<div class="panel panel-default">
		<div class="panel-heading">
				<h4 class="panel-title">Respaldos de Base de Datos Realizados</h4>

				<div class="panel-options">
						<a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
						<a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
						<a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
				</div>
		</div>
		<div class="panel-body">
      <h2>Respaldo de Base de Datos</h2>

      <?php echo $this->Html->link(' Crear nuevo respaldo de Base de Datos', array('action' => 'backup'), array('class' => 'btn btn-primary fa fa-arrow-down')); ?>

      <br />
      <br />
				<table id="table-basic" class="table table-striped">
						<thead>
								<tr>
									<th>Nombre del Archivo .sql</th>
									<th>Peso (KB)</th>
									<th>Acciones</th>
								</tr>
						</thead>
						<tbody>
              <?php foreach ($files as $file) : ?>
                  <tr>
                      <td>
												<span class="badge">
												<?php echo $this->Html->link($file, '/backups/' . $file); ?>
												</span>
											</td>
                      <td><?php echo filesize(WWW_ROOT . 'backups/' . $file); ?> KB</td>
                      <td>
                          <br />
                          <?php
                          echo $this->Form->create('mysqldump', array('url' => 'delete', 'type' => 'POST'));
                          echo $this->Form->hidden('file', array('value' => $file));
                          echo $this->Form->button('Eliminar', array('class' => 'btn btn-danger'));
                          echo $this->Form->end();
                          ?>
                      </td>
                  </tr>
              <?php endforeach; ?>
						</tbody>
				</table>
		</div>
</div>
</div>
