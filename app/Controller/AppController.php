<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

  public $components = array(
         'Session',
         'Auth' => array(
             'loginRedirect' => array(
                 'controller' => 'pages',
                 'action' => 'home'
             ),
             'logoutRedirect' => array(
                 'controller' => 'users',
                 'action' => 'login'
             ),
             'authenticate' => array(
                 'Form' => array(
                     'passwordHasher' => 'Blowfish'
                 )
             ),
             'authorize' => array('Controller'),
             'authError' => false
         )
     );


     public function beforeFilter()
     {
         $this->Auth->allow('login', 'logout');
         $this->set('autentificado', $this->Auth->user());
     }

     public function isAuthorized($user)
     {
         if(isset($user['rol_id']) && $user['rol_id'] == 1)
         {
           if ($user['eliminado'] == 1) {
             $this->Session->setFlash('Usuario y/o contraseña son incorrectos! - Debe ser usuario activo para tener acceso', 'default', array('class' => 'alert alert-danger flash-msg'));
             $this->redirect('/users/logout');
           }
             return true;
         }

         if(isset($user['rol_id']) && $user['rol_id'] == 2)
         {
           if ($user['eliminado'] == 1) {
             $this->Session->setFlash('Usuario y/o contraseña son incorrectos! - Debe ser usuario activo para tener acceso', 'default', array('class' => 'alert alert-danger flash-msg'));
             $this->redirect('/users/logout');
           }
             return true;
         }

         return false;
     }

}
