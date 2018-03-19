<?php #debug($tarjeta['Mesespago']); ?>

<div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title">
								Alumno: <?php echo $tarjeta['Alumno']['Persona']['cedula'].' - '.$tarjeta['Alumno']['Persona']['nombre'].' '.$tarjeta['Alumno']['Persona']['apellido'].'
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Rpte: '.
									$tarjeta['Alumno']['Representant']['Persona']['cedula'].' - '.$tarjeta['Alumno']['Representant']['Persona']['nombre'].' '.$tarjeta['Alumno']['Representant']['Persona']['apellido']; ?>
									<p class="pull-right">PERIODO:  <?php echo $tarjeta['Periodo']['nombre']; ?> </p>
							</h4>

              <p>CÓDIGO DE TARJETA: <code><strong> <?php echo $tarjeta['Tarjeta']['codigo']; ?> </strong></code></p>
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
														<strong>
															<?php echo $mesespago['Mesesyear']['nombre']; ?>
														</strong>
												</td>
											<?php elseif($mesespago['condicion'] == 'Pendiente'): ?>
												<td>
														<strong>
															<p style="color:red">
																<?php echo $mesespago['Mesesyear']['nombre']; ?>
															</p>
														</strong>
												</td>
											<?php endif; ?>
											<?php if ($mesespago['condicion'] == 'Cancelado'): ?>
												<td>
														<strong>
															<?php echo $mesespago['condicion']; ?>
														<strong>
												</td>
											<?php elseif ($mesespago['condicion'] == 'Pendiente'): ?>
												<td>
														<strong>
															<?php echo $mesespago['condicion']; ?>
															<?php
															 if (
																$mesespago['Tarjeta']['Mesespago'][0]['condicion'] == 'Pendiente' &&
																$mesespago['Tarjeta']['Mesespago'][1]['condicion'] == 'Pendiente'
																):
															?>
																<button type="button" name="button">Pagar</button>
															<?php endif; ?>
													<div>
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
