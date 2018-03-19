<?php
App::uses('AppController', 'Controller');
/**
 * Representants Controller
 *
 * @property Representant $Representant
 * @property PaginatorComponent $Paginator
 */
class RepresentantsController extends AppController {

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
		$this->Representant->recursive = 2;
		$this->set('representants', $this->Paginator->paginate());
	}

	public function reporteGeneral() {
		$this->Representant->recursive = 2;
		$this->set('representants', $this->Paginator->paginate());
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
		if (!$this->Representant->exists($id)) {
			throw new NotFoundException(__('Invalid representant'));
		}
		$options = array('conditions' => array('Representant.' . $this->Representant->primaryKey => $id));
		$this->set('representant', $this->Representant->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Representant->create();
			if ($this->Representant->save($this->request->data)) {
				$this->Flash->success(__('The representant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The representant could not be saved. Please, try again.'));
			}
		}
		$personas = $this->Representant->Persona->find('list');
		$profesions = $this->Representant->Profesion->find('list');
		$this->set(compact('personas', 'profesions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Representant->exists($id)) {
			throw new NotFoundException(__('Invalid representant'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Representant->save($this->request->data)) {
				$this->Flash->success(__('The representant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The representant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Representant.' . $this->Representant->primaryKey => $id));
			$this->request->data = $this->Representant->find('first', $options);
		}
		$personas = $this->Representant->Persona->find('list');
		$profesions = $this->Representant->Profesion->find('list');
		$this->set(compact('personas', 'profesions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Representant->id = $id;
		if (!$this->Representant->exists()) {
			throw new NotFoundException(__('Invalid representant'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Representant->delete()) {
			$this->Flash->success(__('The representant has been deleted.'));
		} else {
			$this->Flash->error(__('The representant could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
