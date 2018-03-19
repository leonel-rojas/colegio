<?php
App::uses('AppController', 'Controller');
/**
 * Tipoegresos Controller
 *
 * @property Tipoegreso $Tipoegreso
 * @property PaginatorComponent $Paginator
 */
class TipoegresosController extends AppController {

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
		$this->Tipoegreso->recursive = 0;
		$this->set('tipoegresos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipoegreso->exists($id)) {
			throw new NotFoundException(__('Invalid tipoegreso'));
		}
		$options = array('conditions' => array('Tipoegreso.' . $this->Tipoegreso->primaryKey => $id));
		$this->set('tipoegreso', $this->Tipoegreso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipoegreso->create();
			if ($this->Tipoegreso->save($this->request->data)) {
				$this->Flash->success(__('The tipoegreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipoegreso could not be saved. Please, try again.'));
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
		if (!$this->Tipoegreso->exists($id)) {
			throw new NotFoundException(__('Invalid tipoegreso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tipoegreso->save($this->request->data)) {
				$this->Flash->success(__('The tipoegreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipoegreso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tipoegreso.' . $this->Tipoegreso->primaryKey => $id));
			$this->request->data = $this->Tipoegreso->find('first', $options);
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
		$this->Tipoegreso->id = $id;
		if (!$this->Tipoegreso->exists()) {
			throw new NotFoundException(__('Invalid tipoegreso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tipoegreso->delete()) {
			$this->Flash->success(__('The tipoegreso has been deleted.'));
		} else {
			$this->Flash->error(__('The tipoegreso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
