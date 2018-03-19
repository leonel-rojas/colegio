
<body onload="window.print('','')">
<?php echo $this->Element('css'); ?>
<div class="col-md-10">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">
              <h3>
                <p class="text-center">
                    TARJETA DE PAGO
                </p>
              </h3>

                <br><br><br>
                <table border="0">
                  <tr>
                    <td>
                      <b>Alumno: </b><br>
                      <?php echo $tarjeta['Alumno']['Persona']['cedula'].' - '.$tarjeta['Alumno']['Persona']['nombre'].' '.$tarjeta['Alumno']['Persona']['apellido']; ?>
                    </td>
                    <td>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                      <b>Representante: </b><br>
                      <?php echo $tarjeta['Alumno']['Representant']['Persona']['cedula'].' - '.$tarjeta['Alumno']['Representant']['Persona']['nombre'].' '.$tarjeta['Alumno']['Representant']['Persona']['apellido']; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      &nbsp;
                    </td>
                    <td>
                      &nbsp;
                    </td>
                    <td>
                      &nbsp;
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <b>CÓDIGO DE TARJETA: </b><br>
                      <?php echo $tarjeta['Tarjeta']['codigo']; ?>
                    </td>
                    <td>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td>
                      <b>PERIODO: </b><br>
                      <?php echo $tarjeta['Periodo']['nombre']; ?>
                    </td>
                  </tr>

                </table>
							</h4>
              <br>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-bordered table-primary table-striped nomargin">
                  <thead>
                    <tr>
											<th class="text-center">Meses</th>
											<th class="text-center">Condición</th>
                      <th class="text-center">Fecha de Pago</th>
											<th class="text-center">Monto</th>
                    </tr>
                  </thead>
                  <tbody>
										<?php foreach ($tarjeta['Mesespago'] as $mesespago): ?>
											<tr>
												<?php if ($mesespago['condicion'] == 'Cancelado'): ?>
												<td>
															<?php echo $mesespago['Mesesyear']['nombre']; ?>
                              <i class="fa fa-check-circle"></i>
												</td>
											<?php elseif($mesespago['condicion'] == 'Pendiente'): ?>
												<td>
															<p style="color:red">
																<?php echo $mesespago['Mesesyear']['nombre']; ?>
                                <i class="fa fa-close"></i>
															</p>
												</td>
											<?php endif; ?>
											<?php if ($mesespago['condicion'] == 'Cancelado'): ?>
												<td>
															<?php echo $mesespago['condicion']; ?>
												</td>
											<?php elseif ($mesespago['condicion'] == 'Pendiente'): ?>
												<td class="col-md-1">
															<?php echo $mesespago['condicion']; ?>
													  </strong>
												</td>
											<?php endif; ?>

											<?php if ($mesespago['condicion'] == 'Cancelado'): ?>
												<td><?php echo date("d-m-Y", strtotime($mesespago['Ingreso']['fecha'])); ?></td>
											<?php elseif ($mesespago['condicion'] == 'Pendiente'): ?>
												<td>- - - - -</td>
											<?php endif; ?>
											<?php if ($mesespago['condicion'] == 'Cancelado'): ?>
												<td><?php echo $mesespago['Ingreso']['monto']; ?></td>
											<?php elseif ($mesespago['condicion'] == 'Pendiente'): ?>
												<td>- - - - -</td>
											<?php endif; ?>

												<?php /*
												<td class="actions">
													<?php echo $this->Html->link(__('View'), array('controller' => 'mesespagos', 'action' => 'view', $mesespago['id'])); ?>
													<?php echo $this->Html->link(__('Edit'), array('controller' => 'mesespagos', 'action' => 'edit', $mesespago['id'])); ?>
													<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mesespagos', 'action' => 'delete', $mesespago['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mesespago['id']))); ?>
												</td>
												*/ ?>
											</tr>
										<?php endforeach; ?>

                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div>
          </div><!-- panel -->
        </div>
