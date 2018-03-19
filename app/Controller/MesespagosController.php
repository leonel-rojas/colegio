<?php
App::uses('AppController', 'Controller');
/**
 * Mesespagos Controller
 *
 * @property Mesespago $Mesespago
 * @property PaginatorComponent $Paginator
 */
class MesespagosController extends AppController {

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
		$this->Mesespago->recursive = 0;
		$this->set('mesespagos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mesespago->exists($id)) {
			throw new NotFoundException(__('Invalid mesespago'));
		}
		$options = array('conditions' => array('Mesespago.' . $this->Mesespago->primaryKey => $id));
		$this->set('mesespago', $this->Mesespago->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mesespago->create();
			if ($this->Mesespago->save($this->request->data)) {
				$this->Flash->success(__('The mesespago has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesespago could not be saved. Please, try again.'));
			}
		}
		$mesesyears = $this->Mesespago->Mesesyear->find('list');
		$tarjetas = $this->Mesespago->Tarjetum->find('list');
		$ingresos = $this->Mesespago->Ingreso->find('list');
		$this->set(compact('mesesyears', 'tarjetas', 'ingresos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mesespago->exists($id)) {
			throw new NotFoundException(__('Invalid mesespago'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mesespago->save($this->request->data)) {
				$this->Flash->success(__('The mesespago has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The mesespago could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mesespago.' . $this->Mesespago->primaryKey => $id));
			$this->request->data = $this->Mesespago->find('first', $options);
		}
		$mesesyears = $this->Mesespago->Mesesyear->find('list');
		$tarjetas = $this->Mesespago->Tarjetum->find('list');
		$ingresos = $this->Mesespago->Ingreso->find('list');
		$this->set(compact('mesesyears', 'tarjetas', 'ingresos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mesespago->id = $id;
		if (!$this->Mesespago->exists()) {
			throw new NotFoundException(__('Invalid mesespago'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mesespago->delete()) {
			$this->Flash->success(__('The mesespago has been deleted.'));
		} else {
			$this->Flash->error(__('The mesespago could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
