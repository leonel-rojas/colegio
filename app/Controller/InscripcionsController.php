<?php
App::uses('AppController', 'Controller');

class InscripcionsController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Inscripcion->recursive = 0;
		$this->set('inscripcions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Inscripcion->exists($id)) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		$options = array('conditions' => array('Inscripcion.' . $this->Inscripcion->primaryKey => $id));
		$this->set('inscripcion', $this->Inscripcion->find('first', $options));
	}

	public function add($alumno_id) {

		if ($this->request->is('post')) {
			$this->Inscripcion->create();

			#Generar Código
			$this->loadModel('Periodo', 'RequestHandler');
			$id_periodo = $this->request->data['Inscripcion']['periodo_id'];
			$nombre_periodo = $this->Periodo->find('all', array('conditions'=>array('Periodo.id'=>$id_periodo), 'fields'=>array('Periodo.nombre')));
			$p = $nombre_periodo[0]['Periodo']['nombre'];

			$a = explode('-',$p);
			$i = explode('20', $a[0]);
			$f = explode('20', $a[1]);

			$inicio = $i[1];
			$fin = $f[1];

			if ($alumno_id > 0 && $alumno_id < 10) {
				$codigo = 'CJFR-'.$inicio.$fin.'-000000'.$alumno_id;
			}elseif ($alumno_id > 9 && $alumno_id < 100) {
				$codigo = 'CJFR-'.$inicio.$fin.'-00000'.$alumno_id;
			}else if($alumno_id > 99 && $alumno_id < 1000){
				$codigo = 'CJFR-'.$inicio.$fin.'-0000'.$alumno_id;
			}else if($alumno_id > 999 && $alumno_id < 10000){
				$codigo = 'CJFR-'.$inicio.$fin.'-000'.$alumno_id;
			}else if($alumno_id > 9999 && $alumno_id < 100000){
				$codigo = 'CJFR-'.$inicio.$fin.'-00'.$alumno_id;
			}else if($alumno_id > 99999 && $alumno_id < 1000000){
				$codigo = 'CJFR-'.$inicio.$fin.'-0'.$alumno_id;
			}else if($alumno_id > 999999 && $alumno_id < 10000000){
				$codigo = 'CJFR-'.$inicio.$fin.'-'.$alumno_id;
			}


			$this->loadModel('Tarjeta', 'RequestHandler');
			$tarjeta = array('codigo' => $codigo, 'alumno_id' => $alumno_id, 'periodo_id' => $this->request->data['Inscripcion']['periodo_id']);
			$this->Tarjeta->saveAll($tarjeta);

			$tarjetas = $this->Tarjeta->find('list');
			foreach ($tarjetas as $key => $value) {
				$tarjeta_id = $key;
			}

			#debug($tarjeta_id);
			#exit;
			$this->loadModel('Mesespago', 'RequestHandler');

			$septiembre = array('mesesyear_id' => 1, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($septiembre);

			$octubre = array('mesesyear_id' => 2, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($octubre);

			$noviembre = array('mesesyear_id' => 3, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($noviembre);

			$diciembre = array('mesesyear_id' => 4, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($diciembre);

			$enero = array('mesesyear_id' => 5, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($enero);

			$febrero = array('mesesyear_id' => 6, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($febrero);

			$marzo = array('mesesyear_id' => 7, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($marzo);

			$abril = array('mesesyear_id' => 8, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($abril);

			$mayo = array('mesesyear_id' => 9, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($mayo);

			$junio = array('mesesyear_id' => 10, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($junio);

			$julio = array('mesesyear_id' => 11, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($julio);

			$agosto = array('mesesyear_id' => 12, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($agosto);


			$this->request->data['Inscripcion']['fecha'] = date('Y-m-d');
			$this->request->data['Inscripcion']['alumno_id'] = $alumno_id;

			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash('Datos guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('controller'=>'alumnos', 'action' => 'view/'.$alumno_id));
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}
		$periodos = $this->Inscripcion->Periodo->find('list');
		$cursos = $this->Inscripcion->Curso->find('list');
		$seccions = $this->Inscripcion->Seccion->find('list');
		$turnos = $this->Inscripcion->Turno->find('list');
		$alumnos = $this->Inscripcion->Alumno->find('list');
		$this->set(compact('periodos', 'cursos', 'seccions', 'turnos', 'alumnos'));
	}

	public function nuevoperiodo($alumno_id) {

		if ($this->request->is('post')) {
			$this->Inscripcion->create();

			#Generar Código
			$this->loadModel('Periodo', 'RequestHandler');
			$periodo_escolar = $this->request->data['Inscripcion']['periodo_escolar'];
			$peri = $this->Periodo->find('first', array('conditions'=>array('Periodo.nombre'=>$periodo_escolar)));
			$id_periodo = $peri['Periodo']['id'];

			$validar = $this->Inscripcion->find('first', array('conditions'=>array('Inscripcion.id'=>$id_periodo, 'Inscripcion.alumno_id'=>$alumno_id)));
			if ($validar) {
				$this->Session->setFlash('Ya se encuentra inscrito en este período escolar', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('controller'=>'alumnos', 'action' => 'index'));
			}


			$nombre_periodo = $this->Periodo->find('all', array('conditions'=>array('Periodo.id'=>$id_periodo), 'fields'=>array('Periodo.nombre')));
			$p = $nombre_periodo[0]['Periodo']['nombre'];

			$a = explode('-',$p);
			$i = explode('20', $a[0]);
			$f = explode('20', $a[1]);

			$inicio = $i[1];
			$fin = $f[1];

			if ($alumno_id > 0 && $alumno_id < 10) {
				$codigo = 'CJFR-'.$inicio.$fin.'-000000'.$alumno_id;
			}elseif ($alumno_id > 9 && $alumno_id < 100) {
				$codigo = 'CJFR-'.$inicio.$fin.'-00000'.$alumno_id;
			}else if($alumno_id > 99 && $alumno_id < 1000){
				$codigo = 'CJFR-'.$inicio.$fin.'-0000'.$alumno_id;
			}else if($alumno_id > 999 && $alumno_id < 10000){
				$codigo = 'CJFR-'.$inicio.$fin.'-000'.$alumno_id;
			}else if($alumno_id > 9999 && $alumno_id < 100000){
				$codigo = 'CJFR-'.$inicio.$fin.'-00'.$alumno_id;
			}else if($alumno_id > 99999 && $alumno_id < 1000000){
				$codigo = 'CJFR-'.$inicio.$fin.'-0'.$alumno_id;
			}else if($alumno_id > 999999 && $alumno_id < 10000000){
				$codigo = 'CJFR-'.$inicio.$fin.'-'.$alumno_id;
			}


			$this->loadModel('Tarjeta', 'RequestHandler');
			$tarjeta = array('codigo' => $codigo, 'alumno_id' => $alumno_id, 'periodo_id' => $this->request->data['Inscripcion']['periodo_id']);
			$this->Tarjeta->saveAll($tarjeta);

			$tarjetas = $this->Tarjeta->find('list');
			foreach ($tarjetas as $key => $value) {
				$tarjeta_id = $key;
			}

			#debug($tarjeta_id);
			#exit;
			$this->loadModel('Mesespago', 'RequestHandler');

			$septiembre = array('mesesyear_id' => 1, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($septiembre);

			$octubre = array('mesesyear_id' => 2, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($octubre);

			$noviembre = array('mesesyear_id' => 3, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($noviembre);

			$diciembre = array('mesesyear_id' => 4, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($diciembre);

			$enero = array('mesesyear_id' => 5, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($enero);

			$febrero = array('mesesyear_id' => 6, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($febrero);

			$marzo = array('mesesyear_id' => 7, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($marzo);

			$abril = array('mesesyear_id' => 8, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($abril);

			$mayo = array('mesesyear_id' => 9, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($mayo);

			$junio = array('mesesyear_id' => 10, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($junio);

			$julio = array('mesesyear_id' => 11, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($julio);

			$agosto = array('mesesyear_id' => 12, 'tarjeta_id' => $tarjeta_id, 'ingreso_id' => NULL, 'condicion' => 'Pendiente');
			$this->Mesespago->saveAll($agosto);


			$this->request->data['Inscripcion']['fecha'] = date('Y-m-d');
			$this->request->data['Inscripcion']['alumno_id'] = $alumno_id;


			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash('Datos guardados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('controller'=>'alumnos', 'action' => 'view/'.$alumno_id));
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		}
		$periodos = $this->Inscripcion->Periodo->find('list');
		$cursos = $this->Inscripcion->Curso->find('list');
		$seccions = $this->Inscripcion->Seccion->find('list');
		$turnos = $this->Inscripcion->Turno->find('list');
		$alumnos = $this->Inscripcion->Alumno->find('list');
		$this->set(compact('periodos', 'cursos', 'seccions', 'turnos', 'alumnos'));
	}

	public function edit($id = null) {
		if (!$this->Inscripcion->exists($id)) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash('Datos editados exitosamente', 'default', array('class'=>'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrió un error al editar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Inscripcion.' . $this->Inscripcion->primaryKey => $id));
			$this->request->data = $this->Inscripcion->find('first', $options);
		}
		$periodos = $this->Inscripcion->Periodo->find('list');
		$cursos = $this->Inscripcion->Curso->find('list');
		$seccions = $this->Inscripcion->Seccion->find('list');
		$turnos = $this->Inscripcion->Turno->find('list');
		$alumnos = $this->Inscripcion->Alumno->find('list');
		$this->set(compact('periodos', 'cursos', 'seccions', 'turnos', 'alumnos'));
	}

	public function delete($id = null) {
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Inscripcion->delete()) {
			$this->Session->setFlash('Datos eliminados exitosamente', 'default', array('class'=>'alert alert-success'));
		} else {
			$this->Session->setFlash('Ocurrió un error al eliminar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
