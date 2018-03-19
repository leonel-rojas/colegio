<?php
App::uses('AppController', 'Controller');
/**
 * Egresos Controller
 *
 * @property Egreso $Egreso
 * @property PaginatorComponent $Paginator
 */
class EgresosController extends AppController {

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
		$this->Egreso->recursive = 0;
		$this->set('egresos', $this->Paginator->paginate());
	}

	public function pagospersonal() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>1)));
		#debug($egresos);
		#exit;
		$this->set('egresos', $egresos);
	}

	public function reporteGeneral() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>1)));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteDocentes() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>1)));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteAdministrativos() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>1)));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteObreros() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>1)));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function indicarFecha() {
		if ($this->request->is('post')) {
			$this->Egreso->create();

			$desde = $this->request->data['Egreso']['desde'];
			$hasta = $this->request->data['Egreso']['hasta'];
			return $this->redirect(array('action' => 'personalFecha/'.$desde.'&'.$hasta));
		}
	}

	public function indicarFechaServicios() {
		if ($this->request->is('post')) {
			$this->Egreso->create();

			$desde = $this->request->data['Egreso']['desde'];
			$hasta = $this->request->data['Egreso']['hasta'];
			$detalle = $this->request->data['Egreso']['detalle'];
			return $this->redirect(array('action' => 'serviciosFecha/'.$desde.'/'.$hasta.'/'.$detalle));
		}
	}

	public function personalFecha($rango) {
		if ($this->request->is('get')) {
			$this->Egreso->create();

			$e = explode('&', $rango);
			$desde = $e[0];
			$hasta = $e[1];

			if ($hasta < $desde) {
				$this->Session->setFlash('La fecha inicial debe ser menor que la final', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}

			$this->Egreso->recursive = 3;
			$egresos = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 1)));
			$suma = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 1), 'fields' => array('sum(Egreso.monto) as total')));

			if (empty($egresos)) {
				$this->Session->setFlash('No existen resultados que coincidan con el rango de fecha, por favor intente nuevamente', 'default', array('class'=>'alert alert-warning'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}else {
				$this->set(array('egresos' => $egresos, 'total' => $suma, 'rango' => $rango, 'desde' => $desde, 'hasta' => $hasta));
			}
		}
	}

	public function serviciosFecha($desde, $hasta, $detalle) {
		if ($this->request->is('get')) {
			$this->Egreso->create();

			if ($hasta < $desde) {
				$this->Session->setFlash('La fecha inicial debe ser menor que la final', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}

			$this->Egreso->recursive = 3;
			if ($detalle == 'TODOS') {
				$egresos = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 2)));
				$suma = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 2), 'fields' => array('sum(Egreso.monto) as total')));
			}else{
				$egresos = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 2, 'Egreso.detalle' => $detalle)));
				$suma = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 2, 'Egreso.detalle' => $detalle), 'fields' => array('sum(Egreso.monto) as total')));
			}

			if (empty($egresos)) {
				$this->Session->setFlash('No existen resultados que coincidan con el rango de fecha, por favor intente nuevamente', 'default', array('class'=>'alert alert-warning'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}else {
				$this->set(array('egresos' => $egresos, 'total' => $suma, 'desde' => $desde, 'hasta' => $hasta, 'detalle' => $detalle));
			}
		}
	}

	public function reporteRangoPersonal($rango) {
		if ($this->request->is('get')) {
			$this->Egreso->create();

			$e = explode('&', $rango);
			$desde = $e[0];
			$hasta = $e[1];

			if ($hasta < $desde) {
				$this->Session->setFlash('La fecha inicial debe ser menor que la final', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}

			$this->Egreso->recursive = 3;
			$egresos = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 1)));
			$suma = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "2016-06-01" AND "2016-08-30"', 'Egreso.tipoegreso_id' => 1), 'fields' => array('sum(Egreso.monto) as total')));

			if (empty($egresos)) {
				$this->Session->setFlash('No existen resultados que coincidan con el rango de fecha, por favor intente nuevamente', 'default', array('class'=>'alert alert-warning'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}else {
				$this->set(array('egresos' => $egresos, 'total' => $suma, 'rango' => $rango, 'desde' => $desde, 'hasta' => $hasta));
			}
		}
		$this->layout = 'ajax';
	}

	public function reporteRangoServicios($desde, $hasta, $detalle) {
		if ($this->request->is('get')) {
			$this->Egreso->create();

			if ($hasta < $desde) {
				$this->Session->setFlash('La fecha inicial debe ser menor que la final', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}

			$this->Egreso->recursive = 3;
			if ($detalle == 'TODOS') {
				$egresos = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 2)));
				$suma = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 2), 'fields' => array('sum(Egreso.monto) as total')));
			}else{
				$egresos = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 2, 'Egreso.detalle' => $detalle)));
				$suma = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"', 'Egreso.tipoegreso_id' => 2, 'Egreso.detalle' => $detalle), 'fields' => array('sum(Egreso.monto) as total')));
			}

			if (empty($egresos)) {
				$this->Session->setFlash('No existen resultados que coincidan con el rango de fecha, por favor intente nuevamente', 'default', array('class'=>'alert alert-warning'));
				return $this->redirect(array('action' => 'indicarFecha'));
			}else{
				$this->set(array('egresos' => $egresos, 'total' => $suma, 'desde' => $desde, 'hasta' => $hasta, 'detalle' => $detalle));
			}
		}
		$this->layout = 'ajax';
	}


	public function view($id = null) {
		if (!$this->Egreso->exists($id)) {
			throw new NotFoundException(__('Invalid egreso'));
		}
		$options = array('conditions' => array('Egreso.' . $this->Egreso->primaryKey => $id));
		$this->set('egreso', $this->Egreso->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Egreso->create();
			if ($this->Egreso->save($this->request->data)) {
				$this->Flash->success(__('The egreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The egreso could not be saved. Please, try again.'));
			}
		}
		$tipoegresos = $this->Egreso->Tipoegreso->find('list');
		$trabajadors = $this->Egreso->Trabajador->find('list');
		$this->set(compact('tipoegresos', 'trabajadors'));
	}

	public function pagarpersonal($trabajador_id) {

		$this->loadModel('Banco', 'RequestHandler');
		$banco = $this->Banco->find('all', array('fields'=>array('Banco.total')));
		$ultimo = array_pop($banco);
		$total = $ultimo['Banco']['total'];

		if ($this->request->is('post')) {
			$this->Egreso->create();

			$ingresar = $total-($this->request->data['Egreso']['monto'].'.00');

			$this->request->data['Egreso']['monto'] = $this->request->data['Egreso']['monto'].'.00';
			#debug($this->request->data);
			#exit;
			if ($this->request->data['Egreso']['monto'].'.00' > $total) {
				$this->Session->setFlash('No puede efectuar pago, monto mayor al disponible en la cuenta virtual. <b>Disponible: '.$total.'</b>', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('action' => 'pagarpersonal/'.$trabajador_id));

			}
			if ($this->Egreso->save($this->request->data)) {

				$restar = array(
					'total' => $ingresar,
				);
				$this->Banco->saveAll($restar);

				$this->Session->setFlash('Pago realizado exitosamente', 'default', array('class'=>'alert alert-success'));

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrió un error al realizar el pago, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));

			}
		}
		$trabajador = $trabajador_id;
		$tipoegresos = $this->Egreso->Tipoegreso->find('list');
		$trabajadors = $this->Egreso->Trabajador->find('list');
		$this->set(compact('tipoegresos', 'trabajadors', 'trabajador', 'total'));
	}

	public function pagarservicio() {

		$this->loadModel('Banco', 'RequestHandler');
		$banco = $this->Banco->find('all', array('fields'=>array('Banco.total')));
		$ultimo = array_pop($banco);
		$total = $ultimo['Banco']['total'];

		if ($this->request->is('post')) {
			$this->Egreso->create();

			$ingresar = $total-($this->request->data['Egreso']['monto'].'.00');

			$this->request->data['Egreso']['monto'] = $this->request->data['Egreso']['monto'].'.00';
			#debug($this->request->data);
			#exit;
			if ($this->request->data['Egreso']['monto'].'.00' > $total) {
				$this->Session->setFlash('No puede efectuar pago, monto mayor al disponible en la cuenta virtual. <b>Disponible: '.$total.'</b>', 'default', array('class'=>'alert alert-danger'));
				return $this->redirect(array('action' => 'pagarservicio'));

			}
			if ($this->Egreso->save($this->request->data)) {

				$restar = array(
					'total' => $ingresar,
				);
				$this->Banco->saveAll($restar);

				$this->Session->setFlash('Pago realizado exitosamente', 'default', array('class'=>'alert alert-success'));

				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Ocurrió un error al realizar el pago, por favor intente nuevamente', 'default', array('class'=>'alert alert-danger'));

			}
		}
		$trabajador = $trabajador_id;
		$tipoegresos = $this->Egreso->Tipoegreso->find('list');
		$trabajadors = $this->Egreso->Trabajador->find('list');
		$this->set(compact('tipoegresos', 'trabajadors', 'trabajador', 'total'));
	}

	public function pagosservicios() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2)));
		#debug($egresos);
		#exit;
		$this->set('egresos', $egresos);
	}

	public function reporteGeneralServicios() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2)));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralAseo() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Aseo')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralLuz() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Luz')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralAgua() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Agua')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralTelefono() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Telefono')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralAlquiler() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Alquiler')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralCatastro() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Catastro')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralMantenimiento() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Gastos de Mantenimiento')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralPublicidad() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Publicidad')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralVarios() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Gastos Varios')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}

	public function reporteGeneralDonaciones() {
		$this->Egreso->recursive = 3;
		$egresos = $this->Egreso->find('all', array('conditions'=>array('Egreso.tipoegreso_id'=>2, 'Egreso.detalle' => 'Donaciones')));
		$this->set('egresos', $egresos);
		$this->layout = 'ajax';
	}


	public function edit($id = null) {
		if (!$this->Egreso->exists($id)) {
			throw new NotFoundException(__('Invalid egreso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Egreso->save($this->request->data)) {
				$this->Flash->success(__('The egreso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The egreso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Egreso.' . $this->Egreso->primaryKey => $id));
			$this->request->data = $this->Egreso->find('first', $options);
		}
		$tipoegresos = $this->Egreso->Tipoegreso->find('list');
		$trabajadors = $this->Egreso->Trabajador->find('list');
		$this->set(compact('tipoegresos', 'trabajadors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Egreso->id = $id;
		if (!$this->Egreso->exists()) {
			throw new NotFoundException(__('Invalid egreso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Egreso->delete()) {
			$this->Flash->success(__('The egreso has been deleted.'));
		} else {
			$this->Flash->error(__('The egreso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
