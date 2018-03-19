<?php
	$tar = max($alumno['Tarjeta']);

	#debug($representante);
	#debug($periodo);

	$hoy = date('Y-m-d');
?>
<div class="panel">
        <div class="panel-heading">
          <h4 class="panel-title">DATOS PERSONALES DEL ALUMNO</h4>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table nomargin">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Cedula</th>
                  <th class="text-center">Edad</th>
                  <th class="text-right">Fecha Nacimiento</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $alumno['Persona']['nombre']; ?></td>
                  <td><?php echo $alumno['Persona']['apellido']; ?></td>
                  <td><?php echo $alumno['Persona']['cedula']; ?></td>
                  <td class="text-center"><?php echo $hoy - $alumno['Persona']['nacimiento']; ?></td>
                  <td class="text-right"><?php echo $alumno['Persona']['nacimiento']; ?></td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div>
      </div>

			<div class="panel">
			        <div class="panel-heading">
			          <h4 class="panel-title">DATOS PERSONALES DEL REPRESENTANTE</h4>
			        </div>
			        <div class="panel-body">
			          <div class="table-responsive">
			            <table class="table nomargin">
			              <thead>
			                <tr>
			                  <th>Nombre</th>
			                  <th>Apellido</th>
			                  <th>Cedula</th>
			                  <th class="text-center">Edad</th>
			                  <th class="text-right">Fecha Nacimiento</th>
			                </tr>
			              </thead>
			              <tbody>
											<tr>
			                  <td><?php echo $representante['Persona']['nombre']; ?></td>
			                  <td><?php echo $representante['Persona']['apellido']; ?></td>
			                  <td><?php echo $representante['Persona']['cedula']; ?></td>
			                  <td class="text-center"><?php echo $hoy - $representante['Persona']['nacimiento']; ?></td>
			                  <td class="text-right"><?php echo $representante['Persona']['nacimiento']; ?></td>
			                </tr>
			              </tbody>
			            </table>
			          </div><!-- table-responsive -->
			        </div>
			      </div>

						<div class="panel">
						        <div class="panel-heading">
						          <h4 class="panel-title">PAGOS REALIZADOS</h4>
						        </div>
						        <div class="panel-body">
						          <div class="table-responsive">
												<?php if (!empty($alumno['Ingreso'])): ?>
						            <table class="table nomargin">
												<thead>
													<tr>
														<th><?php echo __('Fecha'); ?></th>
														<th><?php echo __('Periodo'); ?></th>
														<th><?php echo __('Tipo'); ?></th>
														<th><?php echo __('Monto'); ?></th>
													</tr>
												</thead>
													<?php foreach ($alumno['Ingreso'] as $ingreso): ?>
													<tbody>
														<tr>
															<td><?php echo date("d-m-Y", strtotime($ingreso['fecha'])); ?></td>
															<td><?php echo $ingreso['Periodo']['nombre']; ?></td>
															<?php if ($ingreso['tipo'] == 'Inscripción'): ?>
																<td>
																	<div class="alert alert-info col-sm-4">
										                <strong><?php echo $ingreso['tipo']; ?></strong>
										              </div>
																</td>
															<?php else: ?>

																<td>
																	<div class="alert alert-success col-sm-6">
										                <strong>
																			<?php echo $ingreso['tipo']; ?>
																			<?php
																			/*
																				$mes = date("m", strtotime($ingreso['fecha']));
																				if ($mes == 01) {
																					echo "Enero";
																				}elseif ($mes == 02) {
																					echo "Febrero";
																				}elseif ($mes == 03) {
																					echo "Marzo";
																				}elseif ($mes == 04) {
																					echo "Abril";
																				}elseif ($mes == 05) {
																					echo "Mayo";
																				}elseif ($mes == 06) {
																					echo "Junio";
																				}elseif ($mes == 07) {
																					echo "Julio";
																				}elseif ($mes == 08) {
																					echo "Agosto";
																				}elseif ($mes == 09) {
																					echo "Septiembre";
																				}elseif ($mes == 10) {
																					echo "Octubre";
																				}elseif ($mes == 11) {
																					echo "Noviembre";
																				}elseif ($mes == 12) {
																					echo "Diciembre";
																				}
																				*/
																			 ?>
																		</strong>
										              </div>
																</td>
															<?php endif; ?>

															<td><?php echo $ingreso['monto']; ?></td>
														</tr>
													</tbody>
													<?php endforeach; ?>
													</table>
													<br>

												<?php else: ?>
													<div class="alert alert-danger">
						                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						                <strong>Aun no se han realizado pagos</strong>
						              </div>

													<div>
														<ul>
															<li><a href="/colegio/ingresos/pagarinscripcion/<?php echo $alumno['Alumno']['id']?>"><button type="button" class="btn btn-success btn-quirk">Pagar Inscripcion</button></a></li>
														</ul>
													</div>
											<?php endif; ?>
						          </div><!-- table-responsive -->
						        </div>
						      </div>

									<div class="panel">
									        <div class="panel-heading">
									          <h4 class="panel-title">INSCRIPCIONES REALIZADAS</h4>
									        </div>
									        <div class="panel-body">
									          <div class="table-responsive">
															<?php if (!empty($alumno['Inscripcion'])): ?>
									            <table class="table nomargin">
																<thead>
																<tr>
																	<th><?php echo __('Fecha'); ?></th>
																	<th><?php echo __('Periodo'); ?></th>
																	<th><?php echo __('Curso'); ?></th>
																	<th><?php echo __('Seccion'); ?></th>
																	<th><?php echo __('Turno'); ?></th>
																	<?php /*
																	<th><?php echo __('Acciones'); ?></th>
																	*/ ?>
																</tr>
																</thead>
																<?php foreach ($alumno['Inscripcion'] as $inscripcion): ?>
																	<tbody>
																	<tr>
																		<td><?php echo date("d-m-Y", strtotime($inscripcion['fecha'])); ?></td>
																		<td><?php echo $inscripcion['Periodo']['nombre']; ?></td>
																		<td><?php echo $inscripcion['Curso']['nombre']; ?></td>
																		<td><?php echo $inscripcion['Seccion']['nombre']; ?></td>
																		<td><?php echo $inscripcion['Turno']['nombre']; ?></td>
																		<?php /*
																		<td>
																			<a href="/colegio/inscripcions/edit/<?php echo $inscripcion['id']; ?>">
																				<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-icon tooltips" type="button" data-original-title="Ver - Editar"><i class="fa fa-edit"></i></button>
																			</a>
																		</td>
																		*/ ?>
																	</tr>
																</tbody>
																<?php endforeach; ?>
																</table>
															<?php endif; ?>
									          </div><!-- table-responsive -->
									        </div>
																<div class="panel-heading">
																	<h4 class="panel-title">TARJETAS DE PAGO</h4>
																</div>
																<div class="panel-body">
																	<div class="table-responsive">
																		<?php if (!empty($alumno['Tarjeta'])): ?>
																		<table class="table nomargin">
																			<thead>
																			<tr>
																				<th><?php echo __('Codigo'); ?></th>
																				<th><?php echo __('Duración'); ?></th>
																				<th><?php echo __('Acciones'); ?></th>
																			</tr>
																			</thead>
																				<tbody>
																					<?php
																					 #debug($alumno['Inscripcion']);
																					 #debug($alumno['Tarjeta'][]);
																					?>

																					<?php foreach ($alumno['Tarjeta'] as $tarjeta): ?>
																						<tr>
																							<td><?php echo $tarjeta['codigo']; ?></td>
																							<td>
																									<?php echo '<span class="badge">DESDE</span> '.date("d-m-Y", strtotime($tarjeta['Periodo']['desde'])).' <span class="badge">HASTA</span> '.date("d-m-Y", strtotime($tarjeta['Periodo']['hasta'])); ?>
																							</td>
																							<td>
																								<a href="/colegio/tarjetas/view/<?php echo $tarjeta['id']; ?>">
																									<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-icon tooltips" type="button" data-original-title="Ver - Editar"><i class="fa fa-edit"></i></button>
																								</a>
																							</td>
																						</tr>
																					<?php endforeach; ?>
																		</tbody>
																			</table>
																		<?php endif; ?>
																	</div><!-- table-responsive -->
																</div>
															</div>

<?php /*
									<div class="panel">
									        <div class="panel-heading">
									          <h4 class="panel-title">INSCRIPCIONES REALIZADAS</h4>
									        </div>
									        <div class="panel-body">
									          <div class="table-responsive">
															<?php if (!empty($alumno['Inscripcion'])): ?>
									            <table class="table nomargin">
																<thead>
																<tr>
																	<th><?php echo __('Fecha'); ?></th>
																	<th><?php echo __('Periodo'); ?></th>
																	<th><?php echo __('Curso'); ?></th>
																	<th><?php echo __('Seccion'); ?></th>
																	<th><?php echo __('Turno'); ?></th>
																	<th><?php echo __('Acciones'); ?></th>
																</tr>
																</thead>
																<?php foreach ($alumno['Inscripcion'] as $inscripcion): ?>
																	<tbody>
																	<tr>
																		<td><?php echo $inscripcion['fecha']; ?></td>
																		<td><?php echo $inscripcion['periodo_id']; ?></td>
																		<td><?php echo $inscripcion['curso_id']; ?></td>
																		<td><?php echo $inscripcion['seccion_id']; ?></td>
																		<td><?php echo $inscripcion['turno_id']; ?></td>
																		<td>
																			<a href="/colegio/inscripcions/edit/<?php echo $inscripcion['id']; ?>">
																				<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-icon tooltips" type="button" data-original-title="Ver - Editar"><i class="fa fa-edit"></i></button>
																			</a>
																		</td>
																	</tr>
																</tbody>
																<?php endforeach; ?>
																</table>
															<?php endif; ?>
									          </div><!-- table-responsive -->
									        </div>
									      </div>

												<div class="panel">
												        <div class="panel-heading">
												          <h4 class="panel-title">TARJETAS DE PAGO</h4>
												        </div>
												        <div class="panel-body">
												          <div class="table-responsive">
																		<?php if (!empty($alumno['Tarjeta'])): ?>
												            <table class="table nomargin">
																			<thead>
																			<tr>
																				<th><?php echo __('Codigo'); ?></th>
																				<th><?php echo __('Periodo Id'); ?></th>
																				<th><?php echo __('Acciones'); ?></th>
																			</tr>
																			</thead>
																				<tbody>
																					<?php foreach ($alumno['Tarjeta'] as $tarjeta): ?>
																						<tr>
																							<td><?php echo $tarjeta['codigo']; ?></td>
																							<td><?php echo $tarjeta['periodo_id']; ?></td>
																							<td>
																								<a href="/colegio/tarjetas/edit/<?php echo $inscripcion['id']; ?>">
																									<button title="" data-placement="top" data-toggle="tooltip" class="btn btn-primary btn-icon tooltips" type="button" data-original-title="Ver - Editar"><i class="fa fa-edit"></i></button>
																								</a>
																							</td>
																						</tr>
																					<?php endforeach; ?>
																		</tbody>
																			</table>
																		<?php endif; ?>
												          </div><!-- table-responsive -->
												        </div>
												      </div>

*/ ?>
