<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {


	public $uses = array();

	public function display() {

		$this->loadModel('Banco', 'RequestHandler');
		$find = $this->Banco->find('all');
		$ultimo = array_pop($find);
		$saldo = $ultimo['Banco']['total'];
		$this->set('saldo', $saldo);


		$this->loadModel('Ingreso', 'RequestHandler');
		$this->loadModel('Egreso', 'RequestHandler');

		$year = date('Y');

		$mes = date('m')+1;

		switch ($mes) {
			case '2':
				$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
				$ultimo = strftime("%d", $ultimo_dia);
				#echo 'Enero';
				$desde = date('Y').'-01-01';
				$hasta = date('Y').'-01-'.$ultimo;
				$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
				$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
				$this->set(array('total_ingresos_mes' => $total_ingresos_mes, 'total_egresos_mes' => $total_egresos_mes, 'desde' => $desde, 'hasta' => $hasta));
				break;

			case '3':
				$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
				$ultimo = strftime("%d", $ultimo_dia);
				#echo 'Febrero';
				$desde = date('Y').'-02-01';
				$hasta = date('Y').'-02-'.$ultimo;
				$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
				$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
				$this->set(array('total_ingresos_mes' => $total_ingresos_mes, 'total_egresos_mes' => $total_egresos_mes, 'desde' => $desde, 'hasta' => $hasta));
				break;

			case '4':
				$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
				$ultimo = strftime("%d", $ultimo_dia);
				#echo 'Marzo';
				$desde = date('Y').'-03-01';
				$hasta = date('Y').'-03-'.$ultimo;
				$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
				$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
				$this->set(array('total_ingresos_mes' => $total_ingresos_mes, 'total_egresos_mes' => $total_egresos_mes, 'desde' => $desde, 'hasta' => $hasta));
				break;

			case '5':
				$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
				$ultimo = strftime("%d", $ultimo_dia);
				#echo 'Abril';
				$desde = date('Y').'-04-01';
				$hasta = date('Y').'-04-'.$ultimo;
				$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
				$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
				$this->set(array('total_ingresos_mes' => $total_ingresos_mes, 'total_egresos_mes' => $total_egresos_mes, 'desde' => $desde, 'hasta' => $hasta));
				break;

			case '6':
				$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
				$ultimo = strftime("%d", $ultimo_dia);
				#echo 'Mayo';
				$desde = date('Y').'-05-01';
				$hasta = date('Y').'-05-'.$ultimo;
				$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
				$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
				$this->set(array('total_ingresos_mes' => $total_ingresos_mes, 'total_egresos_mes' => $total_egresos_mes, 'desde' => $desde, 'hasta' => $hasta));
				break;

			case '7':
				$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
				$ultimo = strftime("%d", $ultimo_dia);
				#echo 'Junio';
				$desde = date('Y').'-06-01';
				$hasta = date('Y').'-06-'.$ultimo;
				$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
				$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
				$this->set(array('total_ingresos_mes' => $total_ingresos_mes, 'total_egresos_mes' => $total_egresos_mes, 'desde' => $desde, 'hasta' => $hasta));
				break;

			case '8':
				$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
				$ultimo = strftime("%d", $ultimo_dia);
				#echo 'Julio';
				$desde = date('Y').'-07-01';
				$hasta = date('Y').'-07-'.$ultimo;

				$buscar_total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
				if ($buscar_total_ingresos_mes[0][0]['total'] == NULL) {
					$total_ingresos_mes[0][0]['total'] = 0;
				}else {
					$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
				}

				$buscar_total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
				if ($buscar_total_egresos_mes[0][0]['total'] == NULL) {
					$total_egresos_mes[0][0]['total'] = 0;
				}else {
					$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
				}

				#debug($total_egresos_mes[0][0]['total']);
				#exit;

				$this->set(array('total_ingresos_mes' => $total_ingresos_mes, 'total_egresos_mes' => $total_egresos_mes, 'desde' => $desde, 'hasta' => $hasta));
				break;

				case '9':
					$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
					$ultimo = strftime("%d", $ultimo_dia);
					#echo 'Agosto';
					$desde = date('Y').'-08-01';
					$hasta = date('Y').'-08-'.$ultimo;
					$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
					$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
					$this->set(array('total' => $total_mes, 'desde' => $desde, 'hasta' => $hasta));
					break;

				case '10':
					$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
					$ultimo = strftime("%d", $ultimo_dia);
					#echo 'Septiembre';
					$desde = date('Y').'-09-01';
					$hasta = date('Y').'-09-'.$ultimo;
					$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
					$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
					$this->set(array('total' => $total_mes, 'desde' => $desde, 'hasta' => $hasta));
					break;

				case '11':
					$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
					$ultimo = strftime("%d", $ultimo_dia);
					#echo 'Octubre';
					$desde = date('Y').'-10-01';
					$hasta = date('Y').'-10-'.$ultimo;
					$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
					$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
					$this->set(array('total' => $total_mes, 'desde' => $desde, 'hasta' => $hasta));
					break;

				case '12':
					$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
					$ultimo = strftime("%d", $ultimo_dia);
					#echo 'Noviembre';
					$desde = date('Y').'-11-01';
					$hasta = date('Y').'-11-'.$ultimo;
					$total_ingresos_mes = $this->Ingreso->find('all', array('conditions' => array('Ingreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Ingreso.monto) as total')));
					$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
					$this->set(array('total' => $total_egresos_mes, 'desde' => $desde, 'hasta' => $hasta));
					break;

				case '13':
					$ultimo_dia = mktime(0, 0, 0, $mes, 0, $year);
					$ultimo = strftime("%d", $ultimo_dia);
					#echo 'Diciembre';
					$desde = date('Y').'-12-01';
					$hasta = date('Y').'-12-'.$ultimo;
					$total_egresos_mes = $this->Egreso->find('all', array('conditions' => array('Egreso.fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"'), 'fields' => array('sum(Egreso.monto) as total')));
					$this->set(array('total' => $total_mes, 'desde' => $desde, 'hasta' => $hasta));
					break;

		}

		#exit;

		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}
}
