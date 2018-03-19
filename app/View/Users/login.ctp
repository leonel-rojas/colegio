<?php if (!isset($autentificado)): ?>

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="panel signin">
    <div class="panel-heading">
      <h1>U.E.C<br> José Felix Ribas</h1> <br>
      <p class="text-center">
        <?php echo $this->Html->image('/images/logo_colegio.png'); ?>
      </p>
    </div>
    <div class="panel-body">
      <?php echo $this->Session->flash(); ?>
      <?php echo $this->Form->create('User'); ?>
        <div class="form-group mb10">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" placeholder="Ingrese Correo Electrónico" name="data[User][username]" type="email" id="UserUsername" required="required" autofocus>
          </div>
        </div>
        <div class="form-group nomargin">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input class="form-control" placeholder="Ingrese Contraseña" name="data[User][password]" type="password" id="UserPassword" required="required">
          </div>
        </div>
        <?php /*
        <div><a href="" class="forgot">Forgot password?</a></div>
        */ ?>
        <br><br>
        <div class="form-group">
          <button class="btn btn-success btn-quirk btn-block">Ingresar</button>
        </div>
      </form>
    </div>
  </div><!-- panel -->

  <?php endif; ?>
