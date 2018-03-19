<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>José Felix Ribas</title>

	<?php
    echo $this->Element('css');
	?>

	<script type="text/javascript">
      var basePath = "<?php echo Router::url('/'); ?>"
  </script>

</head>

<?php if (!isset($autentificado)): ?>
<body class="login-body">
<?php elseif (isset($autentificado)): ?>
<body>

<header>
  <div class="headerpanel">

    <div class="logopanel">
      <h3><a href="/colegio/">José Felix Ribas</a></h3>
    </div><!-- logopanel -->

    <div class="headerbar">

      <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-logged" data-toggle="dropdown">
                <?php echo $this->Html->image('/images/photos/loggeduser.jpg'); ?>
                <span style="color:#fff;">
                  <b>
                    <?php echo $autentificado['Persona']['nombre'].' '.$autentificado['Persona']['apellido'] ?>
                  </b>
                </span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu pull-right">
                <li><a href="/colegio/users/edittrabajador/<?php echo $autentificado['id']; ?>"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
                <li><a href="/colegio/users/cambiarpass/<?php echo $autentificado['id']; ?>"><i class="glyphicon glyphicon-cog"></i> Cambiar Contraseña</a></li>
                <li><a href="/colegio/users/logout"><i class="glyphicon glyphicon-log-out"></i> Cerrar Sesión</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->
    </div><!-- headerbar -->
  </div><!-- header-->
</header>

<section>

	<?php echo $this->Element('menu'); ?>

  <div class="mainpanel">

    <!--<div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard</h2>
    </div>-->

    <div class="contentpanel">

      <div class="row">
        <div class="col-md-12 col-lg-8 dash-left">

          <?php echo $this->Session->flash(); ?>
          <?php echo $this->fetch('content'); ?>

        </div><!-- col-md-9 -->
      </div><!-- row -->

    </div><!-- contentpanel -->

  </div><!-- mainpanel -->

</section>

<?php endif; ?>

    <?php if (!isset($autentificado)): ?>
      <?php echo $this->fetch('content'); ?>
    <?php endif; ?>


<?php
  echo $this->Element('js');
?>

</body>
</html>
