<div class="col-sm-5 col-md-12 col-lg-6">
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
                      <i class="fa fa-money" style="font: normal normal normal 80px/1 FontAwesome;"> <?php echo $saldo; ?></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
