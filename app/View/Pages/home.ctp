
<?php #if ($autentificado['rol_id'] == 1): ?>

<div class="panel panel-announcement">
	<ul class="panel-options">
		<li><a><i class="fa fa-refresh"></i></a></li>
		<li><a class="panel-remove"><i class="fa fa-remove"></i></a></li>
	</ul>
	<div class="panel-heading">
		<h4 class="panel-title">Bienvenido(a), <?php echo $autentificado['Persona']['nombre'].' '.$autentificado['Persona']['apellido'] ?></h4>
	</div>
</div><!-- panel -->

<div class="row panel-quick-page">

	<div class="col-xs-4 col-sm-5 col-md-4 page-user">
		<div class="panel">
			<a href="/colegio/users">
			<div class="panel-heading">
				<h4 class="panel-title">Gestionar Usuarios</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-users"></i></div>
			</div>
		</a>
		</div>
	</div>

	<div class="col-xs-4 col-sm-4 col-md-4 page-products">
		<div class="panel">
			<a href="/colegio/alumnos">
			<div class="panel-heading">
				<h4 class="panel-title">Gestionar Alumnos</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-graduation-cap"></i></div>
			</div>
		</a>
		</div>
	</div>

	<div class="col-xs-4 col-sm-3 col-md-2 page-events">
		<div class="panel">
			<a href="/colegio/alumnos/tarjetas">
			<div class="panel-heading">
				<h4 class="panel-title">Pago Mensualidad</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-money"></i></div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-xs-4 col-sm-3 col-md-2 page-messages">
		<div class="panel">
			<a href="/colegio/trabajadors">
			<div class="panel-heading">
				<h4 class="panel-title">Pago de Personal</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-minus-circle"></i></div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-xs-4 col-sm-5 col-md-2 page-reports">
		<div class="panel">
			<a href="/colegio/pages/reportes">
			<div class="panel-heading">
				<h4 class="panel-title">Reportes</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-file-pdf-o"></i></div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-2 page-statistics">
		<div class="panel">
			<a href="#">
			<div class="panel-heading">
				<h4 class="panel-title">Estadisticas</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-line-chart"></i></div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 page-support">
		<div class="panel">
			<a href="/colegio/mysqldumps">
			<div class="panel-heading">
				<h4 class="panel-title">Respaldo Base de Datos</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-database"></i></div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-2 page-privacy">
		<div class="panel">
			<a href="/colegio/users/cambiarpass/<?php echo $autentificado['id']; ?>">
			<div class="panel-heading">
				<h4 class="panel-title">Privacidad</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-lock"></i></div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-2 page-settings">
		<div class="panel">
			<a href="/colegio/users/edittrabajador/<?php echo $autentificado['id']; ?>">
			<div class="panel-heading">
				<h4 class="panel-title">Configurar Perfil</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class=" fa fa-wrench"></i></div>
			</div>
		</div>
		</a>
	</div>
</div><!-- row -->


<div class="col-sm-4">
	<div class="panel">
		<div class="panel-heading">
			<h4 class="panel-title">
				INGRESOS OBTENIDOS Y EGRESOS REALIZADOS DESDE
				<?php echo '<span class="badge">'.$desde.'</span> hasta <span class="badge">'.$hasta ?></span>
			</h4>
		</div>
		<div class="panel-body text-center">
			<?php if ($total_ingresos_mes[0][0]['total'] != 0 || $total_egresos_mes[0][0]['total'] != 0): ?>
				<div id="canvas-holder" style="width:80%">
					<canvas id="chart-area" width="300" height="300" />
				</div>
			<?php elseif ($total_ingresos_mes[0][0]['total'] == 0 && $total_egresos_mes[0][0]['total'] == 0): ?>
				<div class="">
					<div class="alert alert-danger">
                <strong>No se han realizado movimientos este mes</strong>
          </div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>


<div class="col-sm-4">
              <div class="panel panel-danger panel-weather">
                <div class="panel-heading">
                  <h4 class="panel-title">SALDO DISPONIBLE EN LA CUENTA VIRTUAL</h4>
                </div>
                <div class="panel-body inverse">
                  <div class="row mb10">
                    <div class="col-xs-4">
											<h2 class="today-day">
											<?php
												$dia_semana = date('w');
												switch ($dia_semana) {
														case 1:
																echo "Lunes";
																break;
														case 2:
																echo "Martes";
																break;
														case 3:
																echo "Miércoles";
																break;
												    case 4:
												        echo "Jueves";
												        break;
												    case 5:
												        echo "Viernes";
												        break;
												    case 6:
												        echo "Sábado";
												        break;
														case 7:
												        echo "Domingo";
												        break;
												}
											?>
											</h2>
                      <h3 class="today-date">
												<?php
													echo date('d');
													echo ' de ';
													$mes = date('m');
													switch ($mes) {
															case 1:
																	echo "Enero";
																	break;
															case 2:
																	echo "Febrero";
																	break;
															case 3:
																	echo "Marzo";
																	break;
													    case 4:
													        echo "Abril";
													        break;
													    case 5:
													        echo "Mayo";
													        break;
													    case 6:
													        echo "Junio";
													        break;
															case 7:
													        echo "Julio";
													        break;
															case 8:
													        echo "Agosto";
													        break;
															case 9:
													        echo "Septiembre";
													        break;
															case 10:
													        echo "Octubre";
													        break;
															case 11:
													        echo "Noviembre";
													        break;
															case 12:
													        echo "Diciembre";
													        break;
													}
													echo ' del año ';
													echo date('Y');
												?>
											</h3>
                    </div>
                    <div class="col-xs-6">
                      <i class="fa fa-money" style="font: normal normal normal 40px/1 FontAwesome;"> <?php echo $saldo; ?></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

						<div class="col-xs-3 col-sm-4 col-lg-3">
						              <div class="panel">
						                <ul class="panel-options">
						                  <li><a><i class="glyphicon glyphicon-option-vertical"></i></a></li>
						                </ul>
						                <div class="panel-heading">
						                  <h4 class="panel-title">Ganancia</h4>
						                </div>
						                <div class="panel-body">
															<ul class="list-group">
																<li class="list-group-item">Ingresos <span class="pull-right"><?php echo $total_ingresos_mes[0][0]['total']; ?> Bs.F</span></li>
																<li class="list-group-item">Egresos <span class="pull-right"><?php echo $total_egresos_mes[0][0]['total']; ?> Bs.F</span></li>
															</ul>
						                  <h3 class="earning-amount"><?php echo ($total_ingresos_mes[0][0]['total'])-$total_egresos_mes[0][0]['total']; ?> Bs.F</h3>

															<?php if ($total_egresos_mes[0][0]['total'] == 0 && $total_ingresos_mes[0][0]['total'] == 0): ?>
																<div class="alert alert-danger">
											                <strong>No se han realizado movimientos este mes</strong>
											          </div>
															<?php elseif ($total_egresos_mes[0][0]['total'] > $total_ingresos_mes[0][0]['total']): ?>
																<h4 class="earning-today text-danger">Pérdida <i class="fa fa-frown-o"></i></h4>
															<?php else: ?>
															<h4 class="earning-today text-success">Ganancia <i class="fa fa-smile-o"></i></h4>
															<?php endif; ?>


						                  <hr class="invisible">
						                  <p>Ganancia obtenida en el mes actual</p>
						                </div>
						              </div><!-- panel -->
						            </div>


<?php #debug($total_ingresos_mes[0][0]['total']); ?>
<script>
var config = {
		type: 'pie',
		data: {
				datasets: [{
						data: [
							<?php echo $total_ingresos_mes[0][0]['total']; ?>,
							<?php echo $total_egresos_mes[0][0]['total']; ?>
						],
						backgroundColor: [
								"#46BFBD",
								"#F7464A",
						],
				}],
				labels: [
						"Ingresos",
						"Egresos",
				]
		},
		options: {
				responsive: true
		}
};

window.onload = function() {
		var ctx = document.getElementById("chart-area").getContext("2d");
		window.myPie = new Chart(ctx, config);
};

</script>

<?php #endif; ?>
