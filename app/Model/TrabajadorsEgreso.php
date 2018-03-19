<?php
App::uses('AppModel', 'Model');
/**
 * TrabajadorsEgreso Model
 *
 * @property Trabajador $Trabajador
 * @property Egreso $Egreso
 */
class TrabajadorsEgreso extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'trabajador_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'), 'message' => 'Campo requerido',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'egreso_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'), 'message' => 'Campo requerido',
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Trabajador' => array(
			'className' => 'Trabajador',
			'foreignKey' => 'trabajador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Egreso' => array(
			'className' => 'Egreso',
			'foreignKey' => 'egreso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
