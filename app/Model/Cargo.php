<?php
App::uses('AppModel', 'Model');
/**
 * Cargo Model
 *
 * @property Trabajador $Trabajador
 */
class Cargo extends AppModel {

	public $displayField = 'nombre';

	public $validate = array(
		'nombre' => array(
			'unique' => array(
				'rule' => 'isUnique',
				'message' => 'Ya existe!',
			),
			'minLength' => array(
				'rule' => array('minLength', 3),
				'message' => 'Campo requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'), 'message' => 'Campo requerido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public $hasMany = array(
		'Trabajador' => array(
			'className' => 'Trabajador',
			'foreignKey' => 'cargo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
