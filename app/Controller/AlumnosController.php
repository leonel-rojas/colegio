<?php
App::uses('AppController', 'Controller');

class AlumnosController extends AppController {


 	public $components = array('Paginator');

	public function index() {
		$this->Alumno->recursive = 3;
    $alumnos = $this->Alumno->find('all', array('conditions'=>array('Alumno.eliminado' => 0)));
		$this->set('alumnos', $alumnos);
	}

  public function morosos() {
		$this->Alumno->recursive = 3;
    $alumnos = $this->Alumno->find('all', array('conditions'=>array('Alumno.eliminado' => 0)));
		$this->set('alumnos', $alumnos);
	}

  public function reporteMorosos() {
		$this->Alumno->recursive = 3;
    $alumnos = $this->Alumno->find('all', array('conditions'=>array('Alumno.eliminado' => 0)));
		$this->set('alumnos', $alumnos);
    $this->layout = 'ajax';
	}

  public function tarjetas() {
    $alumnos = $this->Alumno->find('all', array('conditions'=>array('Alumno.eliminado' => 0)));
		$this->set('alumnos', $alumnos);
	}

	public function reporteGeneral() {
		$this->Alumno->recursive = 2;
    $alumnos = $this->Alumno->find('all', array('conditions'=>array('Alumno.eliminado' => 0)));
		$this->set('alumnos', $alumnos);
		$this->layout = 'ajax';
	}

	public function view($id = null) {
		$this->Alumno->recursive = 2;
		if (!$this->Alumno->exists($id)) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		#debug($this->request->data);
		#exit;

		$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
		$this->set('alumno', $this->Alumno->find('first', $options));

		$this->loadModel('Persona', 'RequestHandler');
		$alumno = $this->Alumno->find('first', $options);
		$representant_id = $alumno['Representant']['persona_id'];

		$options2 = array('conditions' => array('Persona.id' => $representant_id));
		$representante = $this->Persona->find('first', $options2);
		$this->set('representante', $representante);

/*
		foreach ($alumno['Inscripcion'] as $key => $value) {
			$this->loadModel('Periodo', 'RequestHandler');
			$r = $value['periodo_id'];
			$options3 = array('conditions' => array('Periodo.id' => $r));
			$periodo = $this->Periodo->find('first', $options3);
			$this->set('periodo', $periodo);
		}
		*/

		#$this->loadModel('Inscripcion', 'RequestHandler');

	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Alumno->create();
			if ($this->Alumno->save($this->request->data)) {
				$this->Flash->success(__('The alumno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The alumno could not be saved. Please, try again.'));
			}
		}
		$personas = $this->Alumno->Persona->find('list');
		$representants = $this->Alumno->Representant->find('list');
		$this->set(compact('personas', 'representants'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Alumno->exists($id)) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alumno->save($this->request->data)) {
				$this->Flash->success(__('The alumno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The alumno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
			$this->request->data = $this->Alumno->find('first', $options);
		}
		$personas = $this->Alumno->Persona->find('list');
		$representants = $this->Alumno->Representant->find('list');
		$this->set(compact('personas', 'representants'));
	}


	public function delete($id = null) {
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$update = $this->Alumno->query("UPDATE alumnos SET eliminado = 1 WHERE id = ".$id."");
    $this->Session->setFlash('Alumno eliminado exitosamente', 'default', array('class'=>'alert alert-success'));
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
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Alumno->delete()) {
			$this->Flash->success(__('The alumno has been deleted.'));
		} else {
			$this->Flash->error(__('The alumno could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
  */
}
