<?php
App::uses('AppController', 'Controller');
/**
 * Mesesyears Controller
 *
 * @property Mesesyear $Mesesyear
 * @property PaginatorComponent $Paginator
 */
class MesesyearsController extends AppController {

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
		$this->Mesesyear->recursive = 0;
		$this->set('mesesyears', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mesesyear->exists($id)) {
			throw new NotFoundException(__('Invalid mesesyear'));
		}
		$options = array('conditions' => array('Mesesyear.' . $this->Mesesyear->primaryKey => $id));
		$this->set('mesesyear', $this->Mesesyear->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mesesyear->create();
			if ($this->Mesesyear->save($this->request->data)) {
				$this->Flash->success(__('The mesesyear has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesesyear could not be saved. Please, try again.'));
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
		if (!$this->Mesesyear->exists($id)) {
			throw new NotFoundException(__('Invalid mesesyear'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mesesyear->save($this->request->data)) {
				$this->Flash->success(__('The mesesyear has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesesyear could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mesesyear.' . $this->Mesesyear->primaryKey => $id));
			$this->request->data = $this->Mesesyear->find('first', $options);
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
		$this->Mesesyear->id = $id;
		if (!$this->Mesesyear->exists()) {
			throw new NotFoundException(__('Invalid mesesyear'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mesesyear->delete()) {
			$this->Flash->success(__('The mesesyear has been deleted.'));
		} else {
			$this->Flash->error(__('The mesesyear could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
