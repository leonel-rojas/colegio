<?php
App::uses('AppController', 'Controller');
/**
 * Trabajadors Controller
 *
 * @property Trabajador $Trabajador
 * @property PaginatorComponent $Paginator
 */
class TrabajadorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Trabajador->recursive = 0;
		$this->set('trabajadors', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Trabajador->exists($id)) {
			throw new NotFoundException(__('Invalid trabajador'));
		}
		$options = array('conditions' => array('Trabajador.' . $this->Trabajador->primaryKey => $id));
		$this->set('trabajador', $this->Trabajador->find('first', $options));
	}

	public function addtrabajador($id = null) {
		if ($this->request->is('post')) {
			$this->Trabajador->create();
			$this->request->data['Trabajador']['persona_id'] = $id;
			if ($this->Trabajador->save($this->request->data)) {
				$this->Session->setFlash('Datos guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect('/users/addtrabajador/'.$id);
			} else {
				$this->Session->setFlash('Ocurrió un error al registrar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}
		$personas = $this->Trabajador->Persona->find('list');
		$cargos = $this->Trabajador->Cargo->find('list');
		$profesions = $this->Trabajador->Profesion->find('list');
		$this->set(compact('personas', 'cargos', 'profesions'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Trabajador->exists($id)) {
			throw new NotFoundException(__('Invalid trabajador'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Trabajador->save($this->request->data)) {
				$this->Session->setFlash('Datos editados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrió un error al editar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Trabajador.' . $this->Trabajador->primaryKey => $id));
			$this->request->data = $this->Trabajador->find('first', $options);
		}
		$personas = $this->Trabajador->Persona->find('list');
		$cargos = $this->Trabajador->Cargo->find('list');
		$profesions = $this->Trabajador->Profesion->find('list');
		$this->set(compact('personas', 'cargos', 'profesions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Trabajador->id = $id;
		if (!$this->Trabajador->exists()) {
			throw new NotFoundException(__('Invalid trabajador'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Trabajador->delete()) {
			$this->Session->setFlash('Datos eliminados exitosamente', 'default', array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('Ocurrió un error al eliminar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
