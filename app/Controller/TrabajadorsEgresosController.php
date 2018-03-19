<?php
App::uses('AppController', 'Controller');
/**
 * TrabajadorsEgresos Controller
 *
 * @property TrabajadorsEgreso $TrabajadorsEgreso
 * @property PaginatorComponent $Paginator
 */
class TrabajadorsEgresosController extends AppController {

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
		$this->TrabajadorsEgreso->recursive = 0;
		$this->set('trabajadorsEgresos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TrabajadorsEgreso->exists($id)) {
			throw new NotFoundException(__('Invalid trabajadors egreso'));
		}
		$options = array('conditions' => array('TrabajadorsEgreso.' . $this->TrabajadorsEgreso->primaryKey => $id));
		$this->set('trabajadorsEgreso', $this->TrabajadorsEgreso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TrabajadorsEgreso->create();
			if ($this->TrabajadorsEgreso->save($this->request->data)) {
				$this->Flash->success(__('The trabajadors egreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The trabajadors egreso could not be saved. Please, try again.'));
			}
		}
		$trabajadors = $this->TrabajadorsEgreso->Trabajador->find('list');
		$egresos = $this->TrabajadorsEgreso->Egreso->find('list');
		$this->set(compact('trabajadors', 'egresos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TrabajadorsEgreso->exists($id)) {
			throw new NotFoundException(__('Invalid trabajadors egreso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TrabajadorsEgreso->save($this->request->data)) {
				$this->Flash->success(__('The trabajadors egreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The trabajadors egreso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TrabajadorsEgreso.' . $this->TrabajadorsEgreso->primaryKey => $id));
			$this->request->data = $this->TrabajadorsEgreso->find('first', $options);
		}
		$trabajadors = $this->TrabajadorsEgreso->Trabajador->find('list');
		$egresos = $this->TrabajadorsEgreso->Egreso->find('list');
		$this->set(compact('trabajadors', 'egresos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TrabajadorsEgreso->id = $id;
		if (!$this->TrabajadorsEgreso->exists()) {
			throw new NotFoundException(__('Invalid trabajadors egreso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TrabajadorsEgreso->delete()) {
			$this->Flash->success(__('The trabajadors egreso has been deleted.'));
		} else {
			$this->Flash->error(__('The trabajadors egreso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
