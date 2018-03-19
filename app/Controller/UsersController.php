<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

	public $components = array('Paginator');

	public function beforeFilter()
	{
		parent::beforeFilter();

		$this->Auth->allow('');

	}

	public function isAuthorized($user)
	{
		if($this->Auth->user('rol_id') == 2)
		{
			if(in_array($this->action, array('view', 'cambiarpass')))
			{
				return true;
			}
			else
			{
				if($this->Auth->user('id'))
				{
					$this->Session->setFlash('No puede acceder', 'default', array('class' => 'alert alert-danger flash-msg'));
					$this->redirect($this->Auth->redirect());
				}
			}
		}

		return parent::isAuthorized($user);
	}


	public function login()
	{
		if($this->request->is('post'))
		{

			$this->loadModel('Bitacora', 'RequestHandler');
			$username = $this->request->data['User']['username'];
			$buscar = $this->User->find('first', array('conditions' => array('User.username' => $username)));
			$user_id = $buscar['User']['id'];
			$accion = 'Acceso al Sistema';
			$modulo = 'Login';
			#exit;
			$bitacora = array('user_id' => $user_id, 'accion' => $accion, 'modulo' => $modulo);
			$this->Bitacora->saveAll($bitacora);

			$status = $this->User->find('first', array('fields'=>'status','conditions'=>array('username'=>$this->request->data['User']['username'])));

				if($this->Auth->login() && $status['User']['status'] === 'A')
					{
						return $this->redirect($this->Auth->redirectUrl());
					}
					$this->Session->setFlash('Usuario y/o contraseña son incorrectos! - Debe ser usuario activo para tener acceso', 'default', array('class' => 'alert alert-danger flash-msg'));
				}
	}


	public function logout()
	{

		$this->loadModel('Bitacora', 'RequestHandler');
		$user_id = $this->Auth->user('id');
		$accion = 'Salio del Sistema';
		$modulo = 'Login';
		$bitacora = array('user_id' => $user_id, 'accion' => $accion, 'modulo' => $modulo);
		$this->Bitacora->saveAll($bitacora);

		return $this->redirect($this->Auth->logout());
	}

	public function cambiarpass($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Contraseña cambiada exitosamente', 'default', array('class'=>'alert alert-success flash-msg'));
				return $this->redirect(array('controller'=>'pages', 'action' => 'home'));
			} else {
				$this->Session->setFlash('La contraseña no pudo ser cambiada, intente nuevamente', 'default', array('class'=>'alert alert-danger flash-msg'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	public function index() {
		$this->User->recursive = 0;
		$users = $this->User->find('all', array('conditions'=>array('User.eliminado' => 0)));
		$this->set('users', $users);
	}

	public function reporteGeneral() {
		$this->User->recursive = 0;
		$users = $this->User->find('all', array('conditions'=>array('User.eliminado' => 0)));
		$this->set('users', $users);
		$this->layout = 'ajax';
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function addtrabajador($id = null) {
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['persona_id'] = $id;
			$this->request->data['User']['status'] = 'A';
			debug($this->request->data);
			#exit();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Datos guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}
		$personas = $this->User->Persona->find('list');
		$rols = $this->User->Rol->find('list');
		$this->set(compact('personas', 'rols'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edittrabajador($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Datos editados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrió un error al editar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}

		$this->loadModel('Persona', 'RequestHandler');
		$user = $this->User->find('all', array('conditions'=>array('User.id'=>$id)));
		#debug($user);

		$persona_id = $user[0]['Persona']['id'];
		$persona = $this->Persona->find('all', array('conditions'=>array('Persona.id'=>$persona_id)));
		#debug($persona);

		$this->loadModel('Cargo', 'RequestHandler');
		$cargo_id = $persona[0]['Trabajador'][0]['cargo_id'];

		#debug($persona);
		#exit;
		$nombre_cargo = $this->Cargo->find('first', array('conditions'=>array('Cargo.id'=>$cargo_id)));

		#debug($nombre_cargo);

		$this->loadModel('Profesion', 'RequestHandler');
		$profesion_id = $persona[0]['Trabajador'][0]['profesion_id'];
		$nombre_profesion = $this->Profesion->find('first', array('conditions'=>array('Profesion.id'=>$profesion_id)));

		#exit();

		$personas = $this->User->Persona->find('list');
		$rols = $this->User->Rol->find('list');
		$this->set(compact('personas', 'rols', 'user'));
	}


	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$update = $this->User->query("UPDATE users SET eliminado = 1 WHERE id = ".$id."");
    $this->Session->setFlash('Usuario eliminado exitosamente', 'default', array('class'=>'alert alert-success'));
    /*
		if ($update) {
		} else {
      $this->Session->setFlash('Error al eliminar el alumno', 'default', array('class'=>'alert alert-danger'));
		}
    */
		return $this->redirect(array('action' => 'index'));
	}

/*
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash('Datos eliminados exitosamente', 'default', array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('Ocurrió un error al eliminar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	*/
}
