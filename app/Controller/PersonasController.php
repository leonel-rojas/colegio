<?php
App::uses('AppController', 'Controller');
/**
 * Personas Controller
 *
 * @property Persona $Persona
 * @property PaginatorComponent $Paginator
 */
class PersonasController extends AppController {

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
		$this->Persona->recursive = 0;
		$this->set('personas', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
		$this->set('persona', $this->Persona->find('first', $options));
	}

	public function buscarRepresentante() {
		if ($this->request->is('post')) {
			$cedula = $this->request->data['Persona']['cedula'];

			$persona = $this->Persona->find('first', array('conditions' => array('Persona.cedula' => $cedula)));

			if (!empty($persona)) {
				#echo "Celula Existe";
				$persona_id = $persona['Persona']['id'];

				$this->loadModel('Representant', 'RequestHandler');
				$representant = $this->Representant->find('first', array('conditions' => array('Representant.persona_id' => $persona_id)));
				$representant_id = $representant['Representant']['id'];

				return $this->redirect(array('action' => 'addalumno2/'.$representant_id));
			}else{
				#echo "No existe";
				return $this->redirect(array('action' => 'addalumno'));
			}


			#exit;
		}

	}

	public function addtrabajador() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			//$id = $this->request->data['Persona']['id'];
			$persona_id = $this->Persona->query('SELECT MAX(id) AS id FROM personas');
			$persona_id2 = $persona_id[0][0]['id'] + 1;
			//debug($persona_id);
			//exit();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('Datos personales guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect('/trabajadors/addtrabajador/'.$persona_id2);
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos personales, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}
	}

	public function addpersonal() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			//$id = $this->request->data['Persona']['id'];
			$persona_id = $this->Persona->query('SELECT MAX(id) AS id FROM personas');
			$persona_id2 = $persona_id[0][0]['id'] + 1;
			//debug($persona_id);
			//exit();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('Datos personales guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect('/trabajadors/addpersonal/'.$persona_id2);
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos personales, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}
	}


	public function addrepresentante($idalumno = null) {
		if ($this->request->is('post')) {
			$this->Persona->create();

			if ($this->Persona->save($this->request->data)) {

				$this->loadModel('Alumno', 'RequestHandler');
				$this->loadModel('Representant', 'RequestHandler');

				#debug($representant_id[0][0]['id']);
				#exit();
				$representante = array('persona_id' => $idalumno+1, 'profesion_id' => $this->request->data['Persona']['profesion_id']);
				$this->Representant->saveAll($representante);

				$representant_id = $this->Representant->query('SELECT MAX(id) AS id FROM representants');

				$alumno = array('persona_id' => $idalumno, 'representant_id' => $representant_id[0][0]['id']);
				$this->Alumno->saveAll($alumno);

				$alumno_id = $this->Alumno->query('SELECT MAX(id) AS id FROM alumnos');

				$this->Session->setFlash('Datos personales guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect('/inscripcions/add/'.$alumno_id[0][0]['id']);
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos personales, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}

		$this->loadModel('Profesion', 'RequestHandler');
		$profesions = $this->Profesion->find('list');
		$this->set(compact('profesions'));
	}


	public function addalumno() {
		if ($this->request->is('post')) {
			$this->Persona->create();
			//$id = $this->request->data['Persona']['id'];
			$persona_id = $this->Persona->query('SELECT MAX(id) AS id FROM personas');
			$persona_id2 = $persona_id[0][0]['id'] + 1;
			//debug($persona_id);
			//exit();
			if ($this->Persona->save($this->request->data)) {
				$this->Session->setFlash('Datos personales de alumno guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect('/personas/addrepresentante/'.$persona_id2);
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos personales, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}
	}

	public function addalumno2($representant_id) {
		if ($this->request->is('post')) {
			$this->Persona->create();

			#debug($this->request->data);
			#exit();
			if ($this->Persona->save($this->request->data)) {

				$this->loadModel('Alumno', 'RequestHandler');
				$alumno = array('persona_id' => $this->Persona->id, 'representant_id' => $representant_id);
				$this->Alumno->saveAll($alumno);

				$alumno_id = $this->Alumno->query('SELECT MAX(id) AS id FROM alumnos');

				$this->Session->setFlash('Datos personales de alumno guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect('/inscripcions/add/'.$alumno_id[0][0]['id']);

			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos personales, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}
	}



	public function editpersonal($id = null) {
		if (!$this->Persona->exists($id)) {
			throw new NotFoundException(__('Invalid persona'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Persona->save($this->request->data)) {
				$this->Flash->success(__('The persona has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The persona could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Persona.' . $this->Persona->primaryKey => $id));
			$this->request->data = $this->Persona->find('first', $options);
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
		$this->Persona->id = $id;
		if (!$this->Persona->exists()) {
			throw new NotFoundException(__('Invalid persona'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Persona->delete()) {
			$this->Flash->success(__('The persona has been deleted.'));
		} else {
			$this->Flash->error(__('The persona could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
