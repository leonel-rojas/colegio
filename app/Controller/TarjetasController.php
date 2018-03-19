<?php
App::uses('AppController', 'Controller');

class TarjetasController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Tarjeta->recursive = 1;
		$this->set('tarjetas', $this->Paginator->paginate());
	}

	public function view($id = null) {
		$this->Tarjeta->recursive = 3;
		if (!$this->Tarjeta->exists($id)) {
			throw new NotFoundException(__('Invalid tarjeta'));
		}
		$options = array('conditions' => array('Tarjeta.' . $this->Tarjeta->primaryKey => $id));
		$this->set('tarjeta', $this->Tarjeta->find('first', $options));

		$mes = $this->Tarjeta->find('first', array('conditions' => array('Tarjeta.' . $this->Tarjeta->primaryKey => $id)));

		if (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR SEPTIEMBRE";
				$pagarsemptiembre = true;
				$this->set('pagar_semptiembre', $pagar_semptiembre);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR OCTUBRE";
				$pagar_octubre = true;
				$this->set('pagar_octubre', $pagar_octubre);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR NOVIEMBRE";
				$pagar_noviembre = true;
				$this->set('pagar_noviembre', $pagar_noviembre);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR DICIEMBRE";
				$pagar_diciembre = true;
				$this->set('pagar_diciembre', $pagar_diciembre);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR ENERO";
				$pagar_enero = true;
				$this->set('pagar_enero', $pagar_enero);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR FEBRERO";
				$pagar_febrero = true;
				$this->set('pagar_febrero', $pagar_febrero);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR MARZO";
				$pagar_marzo = true;
				$this->set('pagar_marzo', $pagar_marzo);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR ABRIL";
				$pagar_abril = true;
				$this->set('pagar_abril', $pagar_abril);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR MAYO";
				$pagar_mayo = true;
				$this->set('pagar_mayo', $pagar_mayo);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR JUNIO";
				$pagar_junio = true;
				$this->set('pagar_junio', $pagar_junio);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Pendiente' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR JULIO";
				$pagar_julio = true;
				$this->set('pagar_julio', $pagar_julio);
			}
		elseif (
			$mes['Mesespago'][0]['mesesyear_id'] == 1 && $mes['Mesespago'][0]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][1]['mesesyear_id'] == 2 && $mes['Mesespago'][1]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][2]['mesesyear_id'] == 3 && $mes['Mesespago'][2]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][3]['mesesyear_id'] == 4 && $mes['Mesespago'][3]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][4]['mesesyear_id'] == 5 && $mes['Mesespago'][4]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][5]['mesesyear_id'] == 6 && $mes['Mesespago'][5]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][6]['mesesyear_id'] == 7 && $mes['Mesespago'][6]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][7]['mesesyear_id'] == 8 && $mes['Mesespago'][7]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][8]['mesesyear_id'] == 9 && $mes['Mesespago'][8]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][9]['mesesyear_id'] == 10 && $mes['Mesespago'][9]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][10]['mesesyear_id'] == 11 && $mes['Mesespago'][10]['condicion'] == 'Cancelado' &&
			$mes['Mesespago'][11]['mesesyear_id'] == 12 && $mes['Mesespago'][11]['condicion'] == 'Pendiente'
			)
			{
				#echo "PAGAR AGOSTO";
				$pagar_agosto = true;
				$this->set('pagar_agosto', $pagar_agosto);
			}


		#exit;
	}

	public function pdftarjeta($id = null) {
		$this->Tarjeta->recursive = 3;
		if (!$this->Tarjeta->exists($id)) {
			throw new NotFoundException(__('Invalid tarjeta'));
		}
		$this->layout = 'ajax';
		$options = array('conditions' => array('Tarjeta.' . $this->Tarjeta->primaryKey => $id));
		$this->set('tarjeta', $this->Tarjeta->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Tarjeta->create();
			if ($this->Tarjeta->save($this->request->data)) {
				$this->Flash->success(__('The tarjeta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tarjeta could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->Tarjeta->Alumno->find('list');
		$periodos = $this->Tarjeta->Periodo->find('list');
		$this->set(compact('alumnos', 'periodos'));
	}

	public function edit($id = null) {
		if (!$this->Tarjeta->exists($id)) {
			throw new NotFoundException(__('Invalid tarjeta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tarjeta->save($this->request->data)) {
				$this->Flash->success(__('The tarjeta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tarjeta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tarjeta.' . $this->Tarjeta->primaryKey => $id));
			$this->request->data = $this->Tarjeta->find('first', $options);
		}
		$alumnos = $this->Tarjeta->Alumno->find('list');
		$periodos = $this->Tarjeta->Periodo->find('list');
		$this->set(compact('alumnos', 'periodos'));
	}

	public function delete($id = null) {
		$this->Tarjeta->id = $id;
		if (!$this->Tarjeta->exists()) {
			throw new NotFoundException(__('Invalid tarjeta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tarjeta->delete()) {
			$this->Flash->success(__('The tarjeta has been deleted.'));
		} else {
			$this->Flash->error(__('The tarjeta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
