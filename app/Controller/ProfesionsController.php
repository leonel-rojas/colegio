<?php
App::uses('AppController', 'Controller');
/**
 * Profesions Controller
 *
 * @property Profesion $Profesion
 * @property PaginatorComponent $Paginator
 */
class ProfesionsController extends AppController {

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
		$this->Profesion->recursive = 0;
		$this->set('profesions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profesion->exists($id)) {
			throw new NotFoundException(__('Invalid profesion'));
		}
		$options = array('conditions' => array('Profesion.' . $this->Profesion->primaryKey => $id));
		$this->set('profesion', $this->Profesion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesion->create();
			if ($this->Profesion->save($this->request->data)) {
				$this->Flash->success(__('The profesion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The profesion could not be saved. Please, try again.'));
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
		if (!$this->Profesion->exists($id)) {
			throw new NotFoundException(__('Invalid profesion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Profesion->save($this->request->data)) {
				$this->Flash->success(__('The profesion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The profesion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profesion.' . $this->Profesion->primaryKey => $id));
			$this->request->data = $this->Profesion->find('first', $options);
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
		$this->Profesion->id = $id;
		if (!$this->Profesion->exists()) {
			throw new NotFoundException(__('Invalid profesion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Profesion->delete()) {
			$this->Flash->success(__('The profesion has been deleted.'));
		} else {
			$this->Flash->error(__('The profesion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
