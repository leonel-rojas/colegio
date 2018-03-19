<?php if ($autentificado['rol_id'] == 1): ?>


<div class="row panel-quick-page">

	<div class="col-xs-4 col-sm-5 col-md-2 col-md-offset-1 page-reports">
		<div class="panel">
			<a href="#" onclick="window.open('/colegio/users/reporteGeneral')">
			<div class="panel-heading">
				<h4 class="panel-title">USUARIOS REGISTRADOS</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-file-pdf-o"></i></div>
			</div>
		</div>
		</a>
	</div>

	<div class="col-xs-4 col-sm-5 col-md-2 col-md-offset-1 page-reports">
		<div class="panel">
			<a href="#" onclick="window.open('/colegio/alumnos/reporteGeneral')">
			<div class="panel-heading">
				<h4 class="panel-title">ALUMNOS REGISTRADOS</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-file-pdf-o"></i></div>
			</div>
		</div>
		</a>
	</div>

	<div class="col-xs-4 col-sm-5 col-md-2 col-md-offset-1 page-reports">
		<div class="panel">
			<a href="#" onclick="window.open('/colegio/representants/reporteGeneral')">
			<div class="panel-heading">
				<h4 class="panel-title">REPRESENTANTES REGISTRADOS</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-file-pdf-o"></i></div>
			</div>
		</div>
		</a>
	</div>

</div><!-- row -->

<div class="row panel-quick-page">

	<div class="col-xs-4 col-sm-5 col-md-2 col-md-offset-1 page-reports">
		<div class="panel">
			<a href="#" onclick="window.open('/colegio/trabajadors/reporteDocentes')">
			<div class="panel-heading">
				<h4 class="panel-title">PERSONAL DOCENTE</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-file-pdf-o"></i></div>
			</div>
		</div>
		</a>
	</div>

	<div class="col-xs-4 col-sm-5 col-md-2 col-md-offset-1 page-reports">
		<div class="panel">
			<a href="#" onclick="window.open('/colegio/trabajadors/reporteAdministrativos')">
			<div class="panel-heading">
				<h4 class="panel-title">PERSONAL ADMINISTRATIVO</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-file-pdf-o"></i></div>
			</div>
		</div>
		</a>
	</div>

	<div class="col-xs-4 col-sm-5 col-md-2 col-md-offset-1 page-reports">
		<div class="panel">
			<a href="#" onclick="window.open('/colegio/trabajadors/reporteObreros')">
			<div class="panel-heading">
				<h4 class="panel-title">PERSONAL OBRERO</h4>
			</div>
			<div class="panel-body">
				<div class="page-icon"><i class="fa fa-file-pdf-o"></i></div>
			</div>
		</div>
		</a>
	</div>

</div><!-- row -->

<?php endif; ?>
