<div class="leftpanel">
  <div class="leftpanelinner">

    <!-- ################## LEFT PANEL PROFILE ################## -->

    <div class="media leftpanel-profile">
      <div class="media-left">
        <a href="/colegio/">
          <?php echo $this->Html->image('/images/photos/loggeduser.jpg', array('class'=>'media-object img-circle')); ?>
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $autentificado['Persona']['nombre'].' '.$autentificado['Persona']['apellido'] ?> <a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"></i></a></h4>
        <span><?php echo $autentificado['Rol']['nombre']; ?></span>
      </div>
    </div><!-- leftpanel-profile -->

    <ul class="nav nav-tabs nav-justified nav-sidebar">
      <li class="tooltips active" data-toggle="tooltip" title="Menú Principal"><a data-toggle="tab" data-target="#mainmenu"><i class="tooltips fa fa-ellipsis-h"></i></a></li>
      <li class="tooltips" data-toggle="tooltip" title="Cambiar Contraseña"><a href="/colegio/users/cambiarpass/<?php echo $autentificado['id']; ?>"><i class="fa fa-cog"></i></a></li>
      <li class="tooltips" data-toggle="tooltip" title="Cerrar Sesión"><a href="/colegio/users/logout"><i class="fa fa-sign-out"></i></a></li>
    </ul>

    <div class="tab-content">

      <!-- ################# MAIN MENU ################### -->

      <div class="tab-pane active" id="mainmenu">

        <h5 class="sidebar-title">Colegio José Felix Ribas</h5>
        <ul class="nav nav-pills nav-stacked nav-quirk">
          <li class="nav-parent">
            <a href=""><i class="fa fa-graduation-cap"></i> <span>Alumnos</span></a>
            <ul class="children">
              <li><a href="/colegio/personas/addalumno">Registro</a></li>
              <li><a href="/colegio/personas/buscarRepresentante">Registrar (Solo Alumno)</a></li>
              <li><a href="/colegio/alumnos">Listar</a></li>
              <li><a href="/colegio/alumnos/tarjetas">Tarjetas de Pagos</a></li>
            </ul>
          </li>

          <li>
            <a href="/colegio/representants"><i class="fa fa-male"></i> <span>Representantes</span></a>
          </li>

          <li class="nav-parent">
            <a href=""><i class="fa fa-briefcase"></i> <span>Personal</span></a>
            <ul class="children">
              <li><a href="/colegio/personas/addpersonal">Registrar</a></li>
              <li><a href="/colegio/trabajadors">Listar</a></li>
              <li><a href="/colegio/egresos/pagospersonal">Pagos</a></li>
            </ul>
          </li>

          <li class="nav-parent">
            <a href=""><i class="fa fa-lightbulb-o"></i> <span>Pago de Servicios</span></a>
            <ul class="children">
              <li><a href="/colegio/egresos/pagarservicio">Nuevo Pago</a></li>
              <li><a href="/colegio/egresos/pagosservicios">Pagos Realizados</a></li>
            </ul>
          </li>

          <?php /*
          */ ?>
          <li class="nav-parent">
            <a href=""><i class="fa fa-clipboard"></i> <span>Aranceles</span></a>
            <ul class="children">
              <li><a href="/colegio/ingresos/pagararancel">Nuevo Pago</a></li>
              <li><a href="/colegio/ingresos/pagosaranceles">Pagos Realizados</a></li>
            </ul>
          </li>

          <?php if ($autentificado['rol_id'] == 1): ?>

          <li>
            <a href="/colegio/bitacoras"><i class="fa fa-desktop"></i> <span>Bitacora</span></a>
          </li>

          <li class="nav-parent">
            <a href=""><i class="fa fa-users"></i> <span>Users</span></a>
            <ul class="children">
              <li><a href="/colegio/personas/addtrabajador">Registrar</a></li>
              <li><a href="/colegio/users">Listar</a></li>
            </ul>
          </li>
        <?php endif; ?>

          <li>
            <a href="/colegio/bancos/saldo"><i class="fa fa-money"></i> <span>Cuenta Virtual</span></a>
          </li>


          <li class="nav-parent">
            <a href=""><i class="fa fa-bar-chart"></i> <span>Estadisticas</span></a>
            <ul class="children">
              <li><a href="/colegio/ingresos">Ingresos</a></li>
              <li><a href="/colegio/egresos">Egresos</a></li>
              <li><a href="/colegio/alumnos/morosos">Alumnos Morosos</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- tab-pane -->

    </div><!-- tab-content -->

  </div><!-- leftpanelinner -->
</div><!-- leftpanel -->
