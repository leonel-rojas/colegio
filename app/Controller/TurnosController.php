<?php
App::uses('AppController', 'Controller');
/**
 * Turnos Controller
 *
 * @property Turno $Turno
 * @property PaginatorComponent $Paginator
 */
class TurnosController extends AppController {

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
		$this->Turno->recursive = 0;
		$this->set('turnos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Turno->exists($id)) {
			throw new NotFoundException(__('Invalid turno'));
		}
		$options = array('conditions' => array('Turno.' . $this->Turno->primaryKey => $id));
		$this->set('turno', $this->Turno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Turno->create();
			if ($this->Turno->save($this->request->data)) {
				$this->Flash->success(__('The turno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The turno could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Turno->exists($id)) {
			throw new NotFoundException(__('Invalid turno'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Turno->save($this->request->data)) {
				$this->Flash->success(__('The turno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The turno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Turno.' . $this->Turno->primaryKey => $id));
			$this->request->data = $this->Turno->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Turno->id = $id;
		if (!$this->Turno->exists()) {
			throw new NotFoundException(__('Invalid turno'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Turno->delete()) {
			$this->Flash->success(__('The turno has been deleted.'));
		} else {
			$this->Flash->error(__('The turno could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
