<?php
App::uses('AppController', 'Controller');

class IngresosController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Ingreso->recursive = 3;
		$this->set('ingresos', $this->Paginator->paginate());
	}

	public function pagosaranceles() {
		$this->Ingreso->recursive = 3;
		$aranceles = $this->Ingreso->find('all', array('conditions' => array('Ingreso.tipo' => 'Aranceles')));
		$this->set('ingresos', $aranceles);
	}

	public function reporteGeneralAranceles() {
		$this->Ingreso->recursive = 3;
		$aranceles = $this->Ingreso->find('all', array('conditions' => array('Ingreso.tipo' => 'Aranceles')));
		$this->set('ingresos', $aranceles);
		$this->layout = 'ajax';
	}

	public function reporteGeneral() {
		$this->Ingreso->recursive = 3;
		$this->set('ingresos', $this->Paginator->paginate());
		$this->layout = 'ajax';
	}

	public function indicarFecha() {
		if ($this->request->is('post')) {
			$this->Ingreso->create();

			$desde = $this->request->data['Ingreso']['desde'];
			$hasta = $this->request->data['Ingreso']['hasta'];
			return $this->redirect(array('action' => 'porFecha/'.$desde.'&'.$hasta));
		}
	}

	public function porFecha($rango) {
		if ($this->request->is('get')) {
			$this->Ingreso->create();

			$e = explode('&', $rango);
			$desde = $e[0];
			$hasta = $e[1];

			if ($hasta < $desde) {
				$this->Session->setFlash('La fecha inicial debe ser menor que la final', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}

			$this->Ingreso->recursive = 3;
			$ingresos = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"')));
			$suma = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));

			if (empty($ingresos)) {
				$this->Session->setFlash('No existen resultados que coincidan con el rango de fecha, por favor intente nuevamente', 'default', array('class'=>'alert alert-warning'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}else {
				$this->set(array('ingresos' => $ingresos, 'total' => $suma, 'rango' => $rango, 'desde' => $desde, 'hasta' => $hasta));
			}
		}
	}

	public function reporteRango($rango) {
		if ($this->request->is('get')) {
			$this->Ingreso->create();

			$e = explode('&', $rango);
			$desde = $e[0];
			$hasta = $e[1];

			if ($hasta < $desde) {
				$this->Session->setFlash('La fecha inicial debe ser menor que la final', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}

			$this->Ingreso->recursive = 3;
			$ingresos = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"')));
			$suma = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));

			if (empty($ingresos)) {
				$this->Session->setFlash('No existen resultados que coincidan con el rango de fecha, por favor intente nuevamente', 'default', array('class'=>'alert alert-warning'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}else {
				$this->set(array('ingresos' => $ingresos, 'total' => $suma, 'rango' => $rango, 'desde' => $desde, 'hasta' => $hasta));
			}
		}
		$this->layout = 'ajax';
	}

	public function view($id = null) {
		if (!$this->Ingreso->exists($id)) {
			throw new NotFoundException(__('Invalid ingreso'));
		}
		$options = array('conditions' => array('Ingreso.' . $this->Ingreso->primaryKey => $id));
		$this->set('ingreso', $this->Ingreso->find('first', $options));
	}

	public function pagararancel() {
		if ($this->request->is('post')) {
			$this->Ingreso->create();

			$this->request->data['Ingreso']['monto'] = $this->request->data['Ingreso']['monto'].'.00';

			$alumno = $this->Ingreso->Alumno->find('first', array('conditions' => array('Alumno.persona_id' => $this->request->data['Ingreso']['persona_id'])));
			$alumno_id = $alumno['Alumno']['id'];
			$this->request->data['Ingreso']['alumno_id'] = $alumno_id;

			#debug('Pago de Arancel ('.$this->request->data['Ingreso']['detalle'].') a nombre del estudiante <b>'.$alumno['Persona']['cedula'].'</b> - '.$alumno['Persona']['nombre'].' '.$alumno['Persona']['apellido']);
			#exit;

			if ($this->Ingreso->save($this->request->data)) {

				$this->loadModel('Bitacora', 'RequestHandler');
				$user_id = $this->Auth->user('id');
				$accion = 'Pago de Arancel ('.$this->request->data['Ingreso']['detalle'].') a nombre del estudiante '.$alumno['Persona']['cedula'].' - '.$alumno['Persona']['nombre'].' '.$alumno['Persona']['apellido'];
				$modulo = 'Ingresos - Pago de Arancel';
				$bitacora = array('user_id' => $user_id, 'accion' => $accion, 'modulo' => $modulo);
				$this->Bitacora->saveAll($bitacora);

				$this->Session->setFlash('Datos guardados exitosamente', 'default', array('class'=>'alert alert-success'));

				return $this->redirect(array('action' => 'pagosaranceles'));

			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));

			}
		}
		$this->loadModel('Persona', 'RequestHandler');
		$alumnos = $this->Ingreso->Alumno->find('list', array('fields'=>array('Alumno.persona_id'), 'conditions'=>array('Alumno.eliminado' => 0)));

		$opciones= array('conditions'=>array(array('Persona.id' => $alumnos)));
		$personas = $this->Persona->find('list', $opciones);

		$periodos = $this->Ingreso->Periodo->find('list');
		$this->set(compact('periodos', 'alumnos', 'periodo_id', 'personas'));
	}

	public function pagarinscripcion($alumno_id) {
		if ($this->request->is('post')) {
			$this->Ingreso->create();


			#debug($this->request->data['Ingreso']['monto'] = $this->request->data['Ingreso']['monto'].',00');
			#exit;
			$this->request->data['Ingreso']['monto'] = $this->request->data['Ingreso']['monto'].'.00';

			$this->request->data['Ingreso']['fecha'] = date('Y-m-d');
			$this->request->data['Ingreso']['tipo'] = 'Inscripción';
			$this->request->data['Ingreso']['alumno_id'] = $alumno_id;

			$alumno = $this->Ingreso->Alumno->find('first', array('conditions' => array('Alumno.id' => $alumno_id)));

			if ($this->Ingreso->save($this->request->data)) {

				$this->loadModel('Bitacora', 'RequestHandler');
				$user_id = $this->Auth->user('id');
				$accion = 'Pago de Inscripcion del estudiante '.$alumno['Persona']['cedula'].' - '.$alumno['Persona']['nombre'].' '.$alumno['Persona']['apellido'];
				$modulo = 'Ingresos - Pago de Inscripcion';
				$bitacora = array('user_id' => $user_id, 'accion' => $accion, 'modulo' => $modulo);
				$this->Bitacora->saveAll($bitacora);

				$this->loadModel('Banco', 'RequestHandler');
				$banco = $this->Banco->find('all', array('fields'=>array('Banco.total')));
				$ultimo = max($banco);
				$total = $ultimo['Banco']['total'];
				$ingresar = $total+($this->request->data['Ingreso']['monto'].'.00');

				$sumar = array(
					'total' => $ingresar,
				);
				$this->Banco->saveAll($sumar);

				$this->Session->setFlash('Datos guardados exitosamente', 'default', array('class'=>'alert alert-success'));

				return $this->redirect(array('controller'=>'alumnos', 'action' => 'view/'.$alumno_id));
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));

			}
		}
		$this->loadModel('Alumno', 'RequestHandler');
		$a = $this->Alumno->find('all', array('conditions'=>array('Alumno.id'=>$alumno_id)));
		foreach ($a[0]['Inscripcion'] as $key => $value) {
			# code...
			$periodo_id = $value['periodo_id'];
		}
		#exit;

		$periodos = $this->Ingreso->Periodo->find('list');
		$alumnos = $this->Ingreso->Alumno->find('list');
		$this->set(compact('periodos', 'alumnos', 'periodo_id'));
	}


	public function pagarmensualidad($data) {
		$data = explode('&', $data);

		$tarjeta= explode('Tarjeta=', $data[0]);
		$tarjeta_id = $tarjeta[1];

		$mes= explode('Mes=', $data[1]);
		$mes_id = $mes[1];

		$alumno= explode('Alumno=', $data[2]);
		$alumno_id = $alumno[1];

		$this->loadModel('Mesesyear', 'RequestHandler');
		$nombre_mes = $this->Mesesyear->find('first', array('conditions'=>array('Mesesyear.id'=>$mes_id), 'fields'=>array('Mesesyear.nombre')));
		$mes = $nombre_mes['Mesesyear']['nombre'];
		#exit;

		$this->loadModel('Tarjeta', 'RequestHandler');
		$tarjeta = $this->Tarjeta->find('all', array('conditions'=>array('Tarjeta.alumno_id'=>$alumno_id)));
		$ultima_tarjeta = max($tarjeta);
		$codigo_tarjeta = $ultima_tarjeta['Tarjeta']['codigo'];
		$tarjeta_id = $ultima_tarjeta['Tarjeta']['id'];

		if ($this->request->is('post')) {
			$this->Ingreso->create();

			$this->request->data['Ingreso']['fecha'] = date('Y-m-d');
			$this->request->data['Ingreso']['tipo'] = 'Mensualidad';
			$this->request->data['Ingreso']['alumno_id'] = $alumno_id;
			$this->request->data['Ingreso']['monto'] = $this->request->data['Ingreso']['monto'].'.00';


			$alumno = $this->Ingreso->Alumno->find('first', array('conditions' => array('Alumno.id' => $alumno_id)));

			if ($this->Ingreso->save($this->request->data)) {

				$this->loadModel('Bitacora', 'RequestHandler');
				$user_id = $this->Auth->user('id');
				$accion = 'Pago de Mensualidad del estudiante '.$alumno['Persona']['cedula'].' - '.$alumno['Persona']['nombre'].' '.$alumno['Persona']['apellido'];
				$modulo = 'Ingresos - Pago de Mensualidad';
				$bitacora = array('user_id' => $user_id, 'accion' => $accion, 'modulo' => $modulo);
				$this->Bitacora->saveAll($bitacora);

				$this->loadModel('Mesespago', 'RequestHandler');
				$ingreso_id = $this->Ingreso->id;
				$this->Mesespago->query("UPDATE mesespagos SET condicion = 'Cancelado', ingreso_id = '$ingreso_id' WHERE mesesyear_id = '$mes_id' AND tarjeta_id = $tarjeta_id");


				$this->Session->setFlash('Datos guardados exitosamente', 'default', array('class'=>'alert alert-success'));

				return $this->redirect(array('controller'=>'tarjetas', 'action' => 'view/'.$tarjeta_id));
			} else {
				$this->Session->setFlash('Ocurrió un error al guardar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));

			}
		}
		$this->loadModel('Alumno', 'RequestHandler');
		$a = $this->Alumno->find('all', array('conditions'=>array('Alumno.id'=>$alumno_id)));
		foreach ($a[0]['Inscripcion'] as $key => $value) {
			# code...
			$periodo_id = $value['periodo_id'];
		}

		$periodos = $this->Ingreso->Periodo->find('list');
		$alumnos = $this->Ingreso->Alumno->find('list');
		$this->set(compact('periodos', 'alumnos', 'periodo_id', 'codigo_tarjeta', 'mes'));
	}


	public function edit($id = null) {
		if (!$this->Ingreso->exists($id)) {
			throw new NotFoundException(__('Invalid ingreso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ingreso->save($this->request->data)) {
				$this->Session->setFlash('Datos editados exitosamente', 'default', array('class'=>'alert alert-success'));

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrió un error al editar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));

			}
		} else {
			$options = array('conditions' => array('Ingreso.' . $this->Ingreso->primaryKey => $id));
			$this->request->data = $this->Ingreso->find('first', $options);
		}
		$periodos = $this->Ingreso->Periodo->find('list');
		$alumnos = $this->Ingreso->Alumno->find('list');
		$this->set(compact('periodos', 'alumnos'));
	}

	public function delete($id = null) {
		$this->Ingreso->id = $id;
		if (!$this->Ingreso->exists()) {
			throw new NotFoundException(__('Invalid ingreso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ingreso->delete()) {
			$this->Session->setFlash('Datos eliminados exitosamente', 'default', array('class'=>'alert alert-success'));

		} else {
			$this->Session->setFlash('Ocurrió un error al eliminar los datos, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));

		}
		return $this->redirect(array('action' => 'index'));
	}
}
